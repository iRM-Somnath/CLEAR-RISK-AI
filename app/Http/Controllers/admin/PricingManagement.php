<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class PricingManagement extends Controller
{
    public function index(){
        $title = "Pricing Management";
        return view('admin.pages.pricing-management.list', compact("title"));
    }


    public function add($id=''){
        if(!empty($id)):
            $title = "Pricing Management : Edit";
            $oldData = Product::where('status',1)->find();
        else:
            $title="Pricing Management : Add";
            $oldData = NULL;
        endif;
        $productData = Product::where('status','1')->get();
        return view('admin.pages.pricing-management.add', compact("title","oldData","productData"));
    }
}
