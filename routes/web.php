<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authenticate;
use App\Http\Controllers\admin\Dashboard;

use App\Http\Controllers\front\Home;
use App\Http\Controllers\front\About;
use App\Http\Controllers\front\AuditManagement;
use App\Http\Controllers\front\EnterpriseRiskManagement;
use App\Http\Controllers\front\Pricing;
use App\Http\Controllers\front\Contact;
use App\Http\Controllers\front\Blogs;
use App\Http\Controllers\front\Events;

Route::get('/', [Home::class, 'index']);

Route::get('/about-us', [About::class, 'index']);

Route::get('/audit-management', [AuditManagement::class, 'index']);

Route::get('/enterprise-risk-management', [EnterpriseRiskManagement::class, 'index']);

Route::get('/pricing', [Pricing::class, 'index']);

Route::get('/contact-us', [Contact::class, 'index']);

Route::get('/blogs', [Blogs::class, 'index']);

Route::get('/events', [Events::class, 'index']);

Route::prefix('admin')->group(function(){
     Route::get('login',[Authenticate::class,'login'])->name('admin.login');
     Route::post('user-check',[Authenticate::class,'userCheck'])->name('admin.user-check');
     Route::middleware(['isAdmin'])->group(function () {
        Route::get('/dashboard',[Dashboard::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[Authenticate::class,'logout'])->name('admin.logout');
    });
});
