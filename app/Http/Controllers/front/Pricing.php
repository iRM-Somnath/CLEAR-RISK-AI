<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Plan;
class Pricing extends Controller
{
    public function index(){
        $title = "Pricing";
        $productData = Product::where('status', 1)->get();

        return view('front.pages.pricing', compact("title","productData"));
    }
}
