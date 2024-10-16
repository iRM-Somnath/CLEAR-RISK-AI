<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authenticate;

Route::get('/', function () {
    return view('front.pages.home',['title'=> 'Home']);
});

Route::get('/about-us', function () {
    return view('front.pages.about',['title'=> 'About']);
});

Route::get('/audit-management', function () {
    return view('front.pages.auditmanagement',['title'=> 'Audit Management']);
});

Route::get('/enterprise-risk-management', function () {
    return view('front.pages.enterpriseriskmanagement',['title'=> 'Enterprise Risk Management']);
});

Route::get('/pricing', function () {
    return view('front.pages.pricing',['title'=> 'Pricing']);
});

Route::get('/contact-us', function () {
    return view('front.pages.contact',['title'=> 'Contact Us']);
});

Route::get('/blogs', function () {
    return view('front.pages.blogs',['title'=> 'Blogs']);
});

Route::get('/events', function () {
    return view('front.pages.events',['title'=> 'Events']);
});


Route::prefix('admin')->group(function(){
     Route::get('login',[Authenticate::class,'login'])->name('admin.login');
     Route::post('user-check',[Authenticate::class,'userCheck'])->name('admin.user-check');
    //  Route::get('logout',[Authenticate::class,'logout'])->name('admin.logout');
});
