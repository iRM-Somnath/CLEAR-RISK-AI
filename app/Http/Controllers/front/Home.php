<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQS;

class Home extends Controller
{
    public function index() {
        $title = "Home";
        $faq = FAQS::where('status', '1')->get(['question','answer']);
        return view('front.pages.home',compact("title","faq"));
    }
}
