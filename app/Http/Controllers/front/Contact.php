<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(){
        $title = "Contact Us";
        return view('front.pages.contact',compact("title"));
    }
}
