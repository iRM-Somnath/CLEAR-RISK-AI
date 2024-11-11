<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class Blogs extends Controller
{
    public function index(){
        $blogs = Blog::where('status','1')->orderBy('id','DESC')->paginate(6);
        $title = "Blogs";
        return view('front.pages.blogs',compact("title", "blogs"));
    }

    public function singleBlog($slug){
        $blog = Blog::where('status','1')->where('slug',$slug)->first();
        $title= $blog->title??"";
        return view('front.pages.blog-details',compact("title", "blog"));
    }
}
