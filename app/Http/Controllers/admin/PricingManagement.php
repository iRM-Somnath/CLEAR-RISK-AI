<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Plan;
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

    public function store(Request $request) {

        $validated = $request->validate([
            'choose_product' => 'required',
            'choose_plans' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        if($validated):
            plan::create([

                "product_id" => $request->input('choose_product'),
                "plan_id" => $request->input('choose_plans'),
                "price" => $request->input('price'),
                "title" => $request->input('title'),
                "description" => $request->input('description'),
                // "created_by" => Auth::user()->id,
            ]);
            return response()->json([
                'status'=>TRUE,
                'message'=>'Data saved successfully!',
                'redirect'=>'pricing/',
            ]);
        else:
            return response()->json([
                'status'=>FALSE,
                'message'=>'All data are not present in the request!',
                'redirect'=>'',
            ]);
        endif;

    }
}
