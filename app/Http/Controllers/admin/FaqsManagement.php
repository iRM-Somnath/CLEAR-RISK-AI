<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $oldData = FAQS::where('status','!=',3)->find($id);
        else:
            $title="Faqs Management : Add";
            $oldData = NULL;
        endif;
        return view('admin.pages.faqs-management.add', compact("title","oldData"));
    }

    public function save(Request $request) {
        DB::beginTransaction();
        try{
            $validated = $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
            if($validated):
                if(empty($request->input('updateId'))):
                    if(FAQS::whereRaw("LOWER(`question`) = '".strtolower($request->question)."'")->where('status','!=',3)->exists()):
                        return response()->json([
                            'status'=>FALSE,
                            'message'=>'Question already exists!',
                            'redirect'=>'',
                        ]);
                    endif;
                    FAQS::create([
                        "question"=>$request->question,
                        "answer"=>$request->answer,
                        "created_by"=>Auth::user()->id,
                    ]);
                    DB::commit();
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Data saved successfully!',
                        'redirect'=>'faqs/list',
                    ]);
                else:
                    if(FAQS::whereRaw("LOWER(`question`) = '".strtolower($request->question)."'")->where('status','!=',3)->where('id','<>',$request->input('updateId'))->exists()):
                        return response()->json([
                            'status'=>FALSE,
                            'message'=>'Question already exists!',
                            'redirect'=>'',
                        ]);
                    endif;
                    FAQS::where('id',$request->input('updateId'))->update([
                        "question"=>$request->question,
                        "answer"=>$request->answer,
                        "updated_by"=>Auth::user()->id,
                    ]);
                    DB::commit();
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Data updated successfully!',
                        'redirect'=>'faqs/list',
                    ]);
                endif;
            else:
                return response()->json([
                    'status'=>FALSE,
                    'message'=>'All data are not present in the request!',
                    'redirect'=>'',
                ]);
            endif;
        }catch(\Exception $e)   {
            DB::rollBack();
            return response()->json([
                'status'=>FALSE,
                'message'=>'Oops Sank! Something went wrong',
                'redirect'=>'',
                'error'=>$e->getMessage()
            ]);
        }
    }
}
