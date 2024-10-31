<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
class EventManagement extends Controller
{
    public function index(){
        $title = "Event Management";
        return view('admin.pages.event-management.list', compact("title"));
    }


    public function add($id=''){
        if(!empty($id)):
            $title = "Event Management : Edit";
            $oldData = Event::where('status',1)->find();
        else:
            $title="Event Management : Add";
            $oldData = NULL;
        endif;
        return view('admin.pages.event-management.add', compact("title","oldData"));
    }
}
