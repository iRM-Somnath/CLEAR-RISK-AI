<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        $title = "Home";
        return view('front.pages.home',compact("title"));
    }
}
