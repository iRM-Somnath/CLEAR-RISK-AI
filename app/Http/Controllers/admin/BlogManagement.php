<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogManagement extends Controller
{
    public function index()
    {
        $title = "Blog Management";
        $data = Blog::where('status', '!=', 3)->get(); // Fetch all blogs that are not deleted
        return view('admin.pages.blog-management.list', compact("title", "data"));
    }

    public function add($id = '')
    {
        if (!empty($id)) {
            $title = "Blog Management : Edit";
            $oldData = Blog::where('status', '!=', 3)->find($id); // Fetch specific blog data for editing
            if ($oldData) {
                $oldData->published_date = \Carbon\Carbon::parse($oldData->published_date)->format('Y-m-d');
            }
        } else {
            $title = "Blog Management : Add";
            $oldData = NULL; // New blog data
        }
        return view('admin.pages.blog-management.add', compact("title", "oldData"));
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validate the request data
            $validated = $request->validate([
                'title' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'content' => 'required',
                'author' => 'required',
                'published_date' => 'required|date',
            ]);

            if ($validated) {
                $imageName = null;
                $imageOriginalName = null;

                // Handle image upload if an image file is provided
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/blog'), $imageName);
                    $imageOriginalName = $image->getClientOriginalName();
                }

                if (empty($request->input('updateId'))) {
                    // Check if the blog title already exists (case-insensitive)
                    if (Blog::whereRaw("LOWER(`title`) = '" . strtolower($request->title) . "'")
                        ->where('status', '!=', 3)
                        ->exists()) {
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Title already exists!',
                            'redirect' => '',
                        ]);
                    }

                    // Create a new blog post
                    Blog::create([
                        "title" => $request->title,
                        "image" => $imageName,
                        "slug" => Str::slug($request->title),
                        "image_original_name" => $imageOriginalName,
                        "content" => $request->content,
                        "author" => $request->author,
                        "published_date" => $request->published_date,
                        "meta_tags" => $request->meta_tags,
                        "meta_keywords" => $request->meta_keywords,
                        "meta_title" => $request->meta_title,
                        "meta_description" => $request->meta_description,
                        "created_by" => Auth::user()->id,
                    ]);

                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Blog post created successfully!',
                        'redirect' => 'blogs/list',
                    ]);
                } else {
                    // Check for duplicate title excluding the current blog being updated
                    if (Blog::whereRaw("LOWER(`title`) = '" . strtolower($request->title) . "'")
                        ->where('status', '!=', 3)
                        ->where('id', '<>', $request->input('updateId'))
                        ->exists()) {
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Title already exists!',
                            'redirect' => '',
                        ]);
                    }

                    // Fetch the old blog post
                    $oldBlog = Blog::find($request->input('updateId'));
                    if ($oldBlog && $request->hasFile('image')) {
                        // Delete the old image if it exists
                        $oldImagePath = public_path('uploads/blog/' . $oldBlog->image);
                        if (File::exists($oldImagePath)) {
                            File::delete($oldImagePath);
                        }
                    }

                    // Update the existing blog post
                    $updateData = [
                        "title" => $request->title,
                        "slug" => Str::slug($request->title),
                        "content" => $request->content,
                        "author" => $request->author,
                        "published_date" => $request->published_date,
                        "meta_tags" => $request->meta_tags,
                        "meta_keywords" => $request->meta_keywords,
                        "meta_title" => $request->meta_title,
                        "meta_description" => $request->meta_description,
                        "updated_by" => Auth::user()->id,
                    ];

                    // If a new image was uploaded, update the image name and original name
                    if ($imageName) {
                        $updateData['image'] = $imageName;
                        $updateData['image_original_name'] = $imageOriginalName;
                    }

                    Blog::where('id', $request->input('updateId'))->update($updateData);

                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Blog post updated successfully!',
                        'redirect' => 'blogs/list',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => FALSE,
                    'message' => 'All data are not present in the request!',
                    'redirect' => '',
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => FALSE,
                'message' => 'Oops! Something went wrong',
                'redirect' => '',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
