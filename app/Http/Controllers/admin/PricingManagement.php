<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PricingManagement extends Controller
{
    public function index()
    {
        $title = "Pricing Management";
        $data = Plan::where('status', '!=', 3)->get();
        return view('admin.pages.pricing-management.list', compact("title", "data"));
    }

    public function add($id = '')
    {
        if (!empty($id)):
            $title = "Pricing Management : Edit";
            $oldData = Plan::where('status', '!=', 3)->find($id);
        else:
            $title = "Pricing Management : Add";
            $oldData = NULL;
        endif;
        // DB::enableQueryLog();
        $productData = Product::where('status', '1')->get();
        // dd(DB::getQueryLog());
        return view('admin.pages.pricing-management.add', compact("title", "oldData", "productData"));
    }

    public function save(Request $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validate([
                'choose_product' => 'required',
                'choose_plans' => 'required',
                // 'original_price' => '',
                'price' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]);
            if ($validated):
                if (empty($request->input('updateId'))):
                    if (Plan::whereRaw("LOWER(`name`) = '" . strtolower($request->title) . "'")->where('plan_type','=',$request->input('choose_plans'))->where('product_id','=',$request->input('choose_product'))->where('status', '!=', 3)->exists()):
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Plan already exists!',
                            'redirect' => '',
                        ]);
                    endif;
                    // DB::enableQueryLog();
                    Plan::create([
                        "product_id" => $request->input('choose_product'),
                        "plan_type" => $request->input('choose_plans'),
                        "original_price" => $request->input('original_price'),
                        "price" => $request->input('price'),
                        "name" => $request->input('title'),
                        "description" => $request->input('description'),
                        "created_by" => Auth::user()->id,
                    ]);
                    // dd(DB::getQueryLog());
                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Data saved successfully!',
                        'redirect' => 'pricing/list',
                    ]);
                else:
                    if (Plan::whereRaw("LOWER(`name`) = '" . strtolower($request->title) . "'")->where('plan_type','=',$request->input('choose_plans'))->where('product_id','=',$request->input('choose_product'))->where('status', '!=', 3)->where('id', '<>', $request->input('updateId'))->exists()):
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'Plan already exists!',
                            'redirect' => '',
                        ]);
                    endif;
                    Plan::where('id', $request->input('updateId'))->update([
                        "product_id" => $request->input('choose_product'),
                        "plan_type" => $request->input('choose_plans'),
                        "original_price" => $request->input('original_price'),
                        "price" => $request->input('price'),
                        "name" => $request->input('title'),
                        "description" => $request->input('description'),
                        "updated_by" => Auth::user()->id,
                    ]);
                    DB::commit();
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Data updated successfully!',
                        'redirect' => 'pricing/list',
                    ]);
                endif;
            else:
                return response()->json([
                    'status' => FALSE,
                    'message' => 'All data are not present in the request!',
                    'redirect' => '',
                ]);
            endif;
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => FALSE,
                'message' => 'Oops Sank! Something went wrong',
                'redirect' => '',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function showPrice(Request $request){
        DB::beginTransaction();
        $validated = $request->validate([
            'id' => 'required|numeric',
            'value' => 'required|numeric',
        ]);
        try{
            if ($validated):
                // DB::enableQueryLog();
                Plan::where('id', $request->input('id'))->update([
                    'show_original_price' => $request->input('value'),
                ]);
                DB::commit();
                // dd(DB::getQueryLog());
                return response()->json([
                    'status' => TRUE,
                    'message' => 'Request performed successfully!',
                    'redirect' => 'pricing/list',
                    'data' => (object)[],
                ]);
            else:
                return response()->json([
                    'status' => FALSE,
                    'message' => 'All data are not present in the request!',
                    'redirect' => '',
                ]);
            endif;
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => FALSE,
                'message' => 'Oops Sank! Something went wrong',
                'redirect' => '',
                'error' => $e->getMessage()
            ]);
        }
    }
}
