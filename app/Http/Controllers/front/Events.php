<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class Events extends Controller
{
    public function index(){
        $events = Event::where('status','1')->orderBy('id')->paginate(6);
        $title = "events";
        return view('front.pages.events',compact("title", "events"));
    }
}
