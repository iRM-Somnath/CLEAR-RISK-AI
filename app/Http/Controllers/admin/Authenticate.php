<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Controller
{
    public function login()
    {
        if(Auth::check()):
            return redirect('dashboard');
        endif;
        return view('admin.pages.login');
    }

    public function userCheck(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validated):
            if(Auth::attempt($request->only('email','password'))):
                if(Auth::user()->user_type==1):
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Logged In suceessfully!',
                        'redirect'=>'dashboard',
                    ]);
                else:
                    Session::flush();
                    Auth::logout();
                    return response()->json([
                            'status'=>FALSE,
                            'message'=>'Unauthorized Access!',
                            'redirect'=>'login',
                        ]);
                endif;
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
        return redirect('login');
    }

}
