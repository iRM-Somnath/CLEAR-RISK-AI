<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pricing extends Controller
{
    public function index(){
        $title = "Pricing";
        return view('front.pages.pricing', compact("title"));
    }
}
