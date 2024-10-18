<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
    public function index() {
        $title = "About";
        return view('front.pages.about', compact("title"));
    }
}
