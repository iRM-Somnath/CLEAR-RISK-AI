<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authenticate;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\PricingManagement;
use App\Http\Controllers\admin\EventManagement;
use App\Http\Controllers\admin\FaqsManagement;

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
        Route::post('/generic-status-change',[Authenticate::class,'logout'])->name('admin.generic-status-change');

        Route::prefix('pricing')->group(function () {
            Route::get('/',[PricingManagement::class,'index'])->name('admin.pricing');
            Route::get('/add',[PricingManagement::class,'add'])->name('admin.pricing.add');
            // Route::post('/store',[PricingManagement::class,'store'])->name('admin.pricing.store');
            // Route::get('/edit/{id}',[PricingManagement::class,'edit'])->name('admin.pricing.edit');
            // Route::put('/update/{id}',[PricingManagement::class,'update'])->name('admin.pricing.update');
            // Route::delete('/delete/{id}',[PricingManagement::class,'destroy'])->name('admin.pricing.delete');
        });

        Route::prefix('event')->group(function () {
            Route::get('/',[EventManagement::class,'index'])->name('admin.event');
            Route::get('/add',[EventManagement::class,'add'])->name('admin.event.add');
            // Route::post('/store',[PricingManagement::class,'store'])->name('admin.pricing.store');
            // Route::get('/edit/{id}',[PricingManagement::class,'edit'])->name('admin.pricing.edit');
            // Route::put('/update/{id}',[PricingManagement::class,'update'])->name('admin.pricing.update');
            // Route::delete('/delete/{id}',[PricingManagement::class,'destroy'])->name('admin.pricing.delete');
        });
        Route::prefix('faqs')->group(function () {
            Route::get('/',[FaqsManagement::class,'index'])->name('admin.faqs');
            Route::get('/add',[FaqsManagement::class,'add'])->name('admin.faqs.add');
            Route::post('/save',[FaqsManagement::class,'save'])->name('admin.faqs.save');
            // Route::get('/edit/{id}',[FaqsManagement::class,'edit'])->name('admin.pricing.edit');
            // Route::put('/update/{id}',[FaqsManagement::class,'update'])->name('admin.pricing.update');
            // Route::delete('/delete/{id}',[FaqsManagement::class,'destroy'])->name('admin.pricing.delete');
        });
    });
});
