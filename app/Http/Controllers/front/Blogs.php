<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blogs extends Controller
{
    public function index(){
        $title = "Blogs";
        return view('front.pages.blogs',compact("title"));
    }
}
