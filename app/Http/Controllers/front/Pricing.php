<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class Pricing extends Controller
{
    public function index()
    {
        $title = "Pricing";
        $productData = Product::where('status', '1')->get();

        return view('front.pages.pricing', compact("title", "productData"));
    }

    public function getPlans(Request $request)
    {
        try {
            $validated = $request->validate([
                'planType' => 'required',
                'productId' => 'required',
            ]);
            if ($validated):
                // DB::enableQueryLog();
                $data = Plan::where('status', '1')->where('plan_type', $request->planType);
                if($request->productId == "both"):
                    $data = $data->get();
                else:
                    $data = $data->where('product_id', $request->productId)->get();
                endif;
                // dd(DB::getQueryLog());
                if ($data->count() > 0):
                    return response()->json([
                        'status' => TRUE,
                        'message' => 'Data found!',
                        'data' => $data,
                        'redirect' => '',
                    ]);
                else:
                    return response()->json([
                        'status' => FALSE,
                        'message' => 'No data found!',
                        'data' => [],
                        'redirect' => '',
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
            return response()->json([
                'status' => FALSE,
                'message' => 'Oops Sank! Something went wrong',
                'redirect' => '',
                'error' => $e->getMessage()
            ]);
        }
    }
}
