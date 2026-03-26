<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EventManagement extends Controller
{
    public function index()
    {
        $title = "Event Management";
        $data = Event::where('status', '!=', 3)->get(); // Fetch all events that are not deleted
        return view('admin.pages.event-management.list', compact("title", "data"));
    }

    public function add($id = '')
    {
        if (!empty($id)) {
            $title = "Event Management : Edit";
            $oldData = Event::where('status', '!=', 3)->find($id); // Fetch specific event data for editing
            if ($oldData) {
                $oldData->start_date = \Carbon\Carbon::parse($oldData->start_date)->format('Y-m-d');
                $oldData->end_date = \Carbon\Carbon::parse($oldData->end_date)->format('Y-m-d');
            }
        } else {
            $title = "Event Management : Add";
            $oldData = NULL; // New event data
        }
        return view('admin.pages.event-management.add', compact("title", "oldData"));
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validate the request data
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'organizer' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'meeting_url' => 'nullable|url',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            if ($validated) {
                $imageName = null;
                $imageOriginalName = null;

                // Handle image upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/event'), $imageName);
                    $imageOriginalName = $image->getClientOriginalName();
                }

                if (empty($request->input('updateId'))) {
                    // Check for duplicate event title (case-insensitive)
                    if (Event::whereRaw("LOWER(`title`) = '" . strtolower($request->title) . "'")
                        ->where('status', '!=', 3)
                        ->exists()) {
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Title already exists!',
                            'redirect' => '',
                        ]);
                    }

                    // Create a new event
                    Event::create([
                        'title' => $request->title,
                        'description' => $request->description,
                        'image_name' => $imageName,
                        'image_original_name' => $imageOriginalName,
                        'organizer' => $request->organizer,
                        'location' => $request->location,
                        'meeting_url' => $request->meeting_url,
                        'start_date' => $request->start_date,
                        'end_date' => $request->end_date,
                        'created_by' => Auth::user()->id,
                    ]);

                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Event added successfully!',
                        'redirect' => 'event/list',
                    ]);
                } else {
                    // Check for duplicate title excluding the current event
                    if (Event::whereRaw("LOWER(`title`) = '" . strtolower($request->title) . "'")
                        ->where('status', '!=', 3)
                        ->where('id', '<>', $request->input('updateId'))
                        ->exists()) {
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Title already exists!',
                            'redirect' => '',
                        ]);
                    }

                    // Fetch the old event
                    $oldEvent = Event::find($request->input('updateId'));
                    if ($oldEvent && $request->hasFile('image')) {
                        // Delete the old image if it exists
                        $oldImagePath = public_path('uploads/event/' . $oldEvent->image_name);
                        if (File::exists($oldImagePath)) {
                            File::delete($oldImagePath);
                        }
                    }

                    // Update the event data
                    $updateData = [
                        'title' => $request->title,
                        'description' => $request->description,
                        'location' => $request->location,
                        'organizer' => $request->organizer,
                        'meeting_url' => $request->meeting_url,
                        'start_date' => $request->start_date,
                        'end_date' => $request->end_date,
                        'updated_by' => Auth::user()->id,
                    ];

                    if ($imageName) {
                        $updateData['image_name'] = $imageName;
                        $updateData['image_original_name'] = $imageOriginalName;
                    }

                    Event::where('id', $request->input('updateId'))->update($updateData);

                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Event updated successfully!',
                        'redirect' => 'event/list',
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
