<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Events extends Controller
{
    public function index(){
        $title = "Events";
        return view('front.pages.events',compact("title"));
    }
}
