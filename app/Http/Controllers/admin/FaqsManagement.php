<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQS;
use Illuminate\Support\Facades\Auth;

class FaqsManagement extends Controller
{
    public function index(){
        $title = "Faqs Management";
        $data = FAQS::where('status','!=',3)->get();
        return view('admin.pages.faqs-management.list', compact("title","data"));
    }


    public function add($id=''){
        if(!empty($id)):
            $title = "Faqs Management : Edit";
            $oldData = FAQS::where('status',1)->find();
        else:
            $title="Faqs Management : Add";
            $oldData = NULL;
        endif;
        return view('admin.pages.faqs-management.add', compact("title","oldData"));
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'qustion' => 'required',
            'answer' => 'required',
        ]);
        if($validated):
            FAQS::create([
                "question"=>$request->qustion,
                "answer"=>$request->answer,
                "created_by"=>Auth::user()->id,
            ]);
            return response()->json([
                'status'=>TRUE,
                'message'=>'Data saved successfully!',
                'redirect'=>'faqs/',
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
