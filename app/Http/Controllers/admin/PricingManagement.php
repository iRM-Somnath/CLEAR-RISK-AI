<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingManagement extends Controller
{
    public function index(){
        $title = "Pricing Management";
        return view('admin.pages.pricing-management.list', compact("title"));
    }
}
