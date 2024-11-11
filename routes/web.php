<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authenticate;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\PricingManagement;
use App\Http\Controllers\admin\EventManagement;
use App\Http\Controllers\admin\FaqsManagement;
use App\Http\Controllers\admin\BlogManagement;

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
Route::post('/get-plans', [Pricing::class, 'getPlans']);

Route::get('/contact-us', [Contact::class, 'index']);

Route::get('/blogs', [Blogs::class, 'index']);

Route::get('/events', [Events::class, 'index']);

Route::prefix('admin')->group(function(){
     Route::get('login',[Authenticate::class,'login'])->name('admin.login');
     Route::post('user-check',[Authenticate::class,'userCheck'])->name('admin.user-check');
     Route::middleware(['isAdmin'])->group(function () {
        Route::get('/dashboard',[Dashboard::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[Authenticate::class,'logout'])->name('admin.logout');
        Route::post('/generic-status-change',[Authenticate::class,'genericStatusChange'])->name('admin.generic-status-change');

        Route::prefix('pricing')->group(function () {
            Route::get('/list',[PricingManagement::class,'index'])->name('admin.pricing.list');
            Route::get('/add',[PricingManagement::class,'add'])->name('admin.pricing.add');
            Route::post('/save',[PricingManagement::class,'save'])->name('admin.pricing.save');
            Route::get('/edit/{id}',[PricingManagement::class,'add'])->name('admin.pricing.edit');
            // Route::put('/update/{id}',[PricingManagement::class,'update'])->name('admin.pricing.update');
            // Route::delete('/delete/{id}',[PricingManagement::class,'destroy'])->name('admin.pricing.delete');
        });

        Route::prefix('event')->group(function () {
            Route::get('/list', [EventManagement::class, 'index'])->name('admin.event.list');
            Route::get('/add', [EventManagement::class, 'add'])->name('admin.event.add');
            Route::post('/save', [EventManagement::class, 'save'])->name('admin.event.save');
            Route::get('/edit/{id}', [EventManagement::class, 'add'])->name('admin.event.edit');
            // Route::put('/update/{id}', [EventManagement::class, 'save'])->name('admin.event.update');
            // Route::post('admin/event/changeStatus/{id}', [EventManagement::class, 'changeStatus'])->name('admin.event.changeStatus');
            // Route::delete('/delete/{id}', [EventManagement::class, 'delete'])->name('admin.event.delete');
        });

        Route::prefix('faqs')->group(function () {
            Route::get('/list',[FaqsManagement::class,'index'])->name('admin.faqs.list');
            Route::get('/add',[FaqsManagement::class,'add'])->name('admin.faqs.add');
            Route::post('/save',[FaqsManagement::class,'save'])->name('admin.faqs.save');
            Route::get('/edit/{id}',[FaqsManagement::class,'add'])->name('admin.faqs.edit');
            // Route::put('/update/{id}',[FaqsManagement::class,'update'])->name('admin.pricing.update');
            // Route::delete('/delete/{id}',[FaqsManagement::class,'destroy'])->name('admin.pricing.delete');
        });

        Route::prefix('blogs')->group(function () {
            Route::get('/list', [BlogManagement::class, 'index'])->name('admin.blogs.list');
            Route::get('/add', [BlogManagement::class, 'add'])->name('admin.blogs.add');
            Route::post('/save', [BlogManagement::class, 'save'])->name('admin.blogs.save');
            Route::get('/edit/{id}', [BlogManagement::class, 'add'])->name('admin.blogs.edit');
            // Route::put('/update/{id}', [BlogManagement::class, 'update'])->name('admin.blogs.update');
            // Route::delete('/delete/{id}', [BlogManagement::class, 'destroy'])->name('admin.blogs.delete');
        });
    });
});
