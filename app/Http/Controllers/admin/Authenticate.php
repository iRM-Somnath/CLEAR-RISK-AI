<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class Authenticate extends Controller
{
    public function login()
    {
        if(Auth::check()):
            return redirect('admin/dashboard');
        endif;
        return view('admin.pages.login');
    }

    public function userCheck(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validated):
            $rememberMe = $request->has('rememberme') ? TRUE : FALSE;
            if(Auth::attempt($request->only('email','password'),$rememberMe)):
                // if(Auth::user()->user_type==1):
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Logged In suceessfully!',
                        'redirect'=>'dashboard',
                    ]);
                // else:
                //     Session::flush();
                //     Auth::logout();
                    // return response()->json([
                    //         'status'=>FALSE,
                    //         'message'=>'Unauthorized Access!',
                    //         'redirect'=>'login',
                    //     ]);
                // endif;
            endif;
            return response()->json([
                    'status'=>FALSE,
                    'message'=>'Invalid Email or Password!',
                    'redirect'=>'',
                ]);
        else:
            return response()->json([
                    'status'=>FALSE,
                    'message'=>'All data are not present in the request!',
                    'redirect'=>'',
                ]);
        endif;
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('admin/login');
    }

    public function lock(Request $request)
    {
        // Set a lock state in the session
        $request->session()->put('isLocked', true);

        return response()->json([
            'status'=>TRUE,
            'message'=>'Screen locked!',
            'redirect'=>'',
        ]);
    }

    public function genericStatusChange(Request $request)
    {
        try{
            DB::beginTransaction();
            if($request->ajax()):
                // DB::enableQueryLog();
                $dbTransaction = DB::table($request->input('table'))
                                    ->where($request->input('keyId'),$request->input('id'))
                                    ->update([
                                        'status'=>$request->input("status"),
                                        'updated_by'=>Auth::user()->id
                                    ]);
                // dd(DB::getQueryLog());
                if($dbTransaction):
                    DB::commit();
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Request processed successfully!',
                        'redirect'=>'',
                        'postStatus'=>$request->input("status")
                    ]);
                endif;

                DB::rollBack();
                return response()->json([
                        'status'=>FALSE,
                        'message'=>'Something went wrong!',
                        'redirect'=>'',
                        'postStatus'=>$request->input("status")
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

    public function genericUpdate(Request $request)
    {
        try {
            DB::beginTransaction();
            
            if ($request->ajax()) {
                $table = $request->input('table');
                $updates = $request->input('updates');
    
                if (!is_array($updates) || empty($updates)) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Invalid update data provided!',
                        'redirect' => '',
                    ]);
                }
    
                foreach ($updates as $update) {
                    if (!isset($update['keyColumn'], $update['keyId'])) {
                        DB::rollBack();
                        return response()->json([
                            'status' => false,
                            'message' => 'Missing keyColumn or keyId in update data!',
                            'redirect' => '',
                        ]);
                    }
    
                    $keyColumn = $update['keyColumn'];
                    $keyId = $update['keyId'];
                    
                    $updateData = collect($update)->except(['keyColumn', 'keyId'])->toArray();
                    $updateData['updated_by'] = Auth::user()->id;
    
                    $dbTransaction = DB::table($table)
                        ->where($keyColumn, $keyId)
                        ->update($updateData);
    
                    if (!$dbTransaction) {
                        DB::rollBack();
                        return response()->json([
                            'status' => false,
                            'message' => 'Something went wrong while updating records!',
                            'redirect' => '',
                        ]);
                    }
                }
    
                DB::commit();
                return response()->json([
                    'status' => true,
                    'message' => 'Records updated successfully!',
                    'redirect' => '',
                    'updatedData' => $updates
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => 'Oops! Something went wrong.',
                'redirect' => '',
                'error' => $e->getMessage()
            ]);
        }
    }
    
}
