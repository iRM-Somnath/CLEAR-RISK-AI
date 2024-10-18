<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditManagement extends Controller
{
    public function index() {
        $title = "Audit Management";
        return view('front.pages.audit_management', compact("title"));
    }
}
