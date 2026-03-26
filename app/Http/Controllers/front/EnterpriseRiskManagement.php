<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnterpriseRiskManagement extends Controller
{
    public function index(){
        $title = "Enterprise Risk Management";
        return view('front.pages.enterprise_risk_management', compact("title"));
    }
}
