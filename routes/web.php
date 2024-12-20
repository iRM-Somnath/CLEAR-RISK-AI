<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Authenticate;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\PricingManagement;
use App\Http\Controllers\admin\EventManagement;
use App\Http\Controllers\admin\FaqsManagement;
use App\Http\Controllers\admin\BlogManagement;
// use App\Http\Controllers\admin\HomeManagement;
use App\Http\Controllers\admin\SiteManagement;
use App\Http\Controllers\admin\SubscribedNewsletterController;




use App\Http\Controllers\front\Home;
use App\Http\Controllers\front\About;
use App\Http\Controllers\front\AuditManagement;
use App\Http\Controllers\front\EnterpriseRiskManagement;
use App\Http\Controllers\front\Pricing;
use App\Http\Controllers\front\ContactUs;
use App\Http\Controllers\front\Blogs;
use App\Http\Controllers\front\Events;



Route::get('/', [Home::class, 'index'])->name('home');

Route::get('/about-us', [About::class, 'index'])->name('about-us');

Route::get('/audit-management', [AuditManagement::class, 'index'])->name('audit-management');

Route::get('/enterprise-risk-management', [EnterpriseRiskManagement::class, 'index'])->name('enterprise-risk-management');

Route::get('/pricing', [Pricing::class, 'index'])->name('pricing');
Route::post('/get-plans', [Pricing::class, 'getPlans'])->name('get-plans');

Route::get('/contact-us', [ContactUs::class, 'index'])->name('contactUS-us');
// Route::post('/submit', [Contact::class, 'submit'])->name('contact-us');
// Route::post('/contact-us', [Contact::class, 'submit'])->name('contact-form');

Route::get('/blogs', [Blogs::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [Blogs::class, 'singleBlog'])->name('blogs.show');


Route::get('/events', [Events::class, 'index'])->name('events.index');

Route::get('/HomeCms', [Events::class, 'index'])->name('events.index');
Route::post('subscribed-newsletter', [SubscribedNewsletterController::class, 'save'])->name('subscribed_newsletters');

Route::prefix('admin')->group(function () {
    Route::get('login', [Authenticate::class, 'login'])->name('admin.login');
    Route::post('user-check', [Authenticate::class, 'userCheck'])->name('admin.user-check');
    Route::middleware(['isAdmin'])->group(function () {
        Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [Authenticate::class, 'logout'])->name('admin.logout');
        Route::post('/generic-status-change', [Authenticate::class, 'genericStatusChange'])->name('admin.generic-status-change');

        Route::prefix('pricing')->group(function () {
            Route::get('/list', [PricingManagement::class, 'index'])->name('admin.pricing.list');
            Route::get('/add', [PricingManagement::class, 'add'])->name('admin.pricing.add');
            Route::post('/save', [PricingManagement::class, 'save'])->name('admin.pricing.save');
            Route::get('/edit/{id}', [PricingManagement::class, 'add'])->name('admin.pricing.edit');
        });

        Route::prefix('event')->group(function () {
            Route::get('/list', [EventManagement::class, 'index'])->name('admin.event.list');
            Route::get('/add', [EventManagement::class, 'add'])->name('admin.event.add');
            Route::post('/save', [EventManagement::class, 'save'])->name('admin.event.save');
            Route::get('/edit/{id}', [EventManagement::class, 'add'])->name('admin.event.edit');
        });

        Route::prefix('faqs')->group(function () {
            Route::get('/list', [FaqsManagement::class, 'index'])->name('admin.faqs.list');
            Route::get('/add', [FaqsManagement::class, 'add'])->name('admin.faqs.add');
            Route::post('/save', [FaqsManagement::class, 'save'])->name('admin.faqs.save');
            Route::get('/edit/{id}', [FaqsManagement::class, 'add'])->name('admin.faqs.edit');
        });

        Route::prefix('blogs')->group(function () {
            Route::get('/list', [BlogManagement::class, 'index'])->name('admin.blogs.list');
            Route::get('/add', [BlogManagement::class, 'add'])->name('admin.blogs.add');
            Route::post('/save', [BlogManagement::class, 'save'])->name('admin.blogs.save');
            Route::get('/edit/{id}', [BlogManagement::class, 'add'])->name('admin.blogs.edit');
        });

        // Route::prefix('home')->group(function () {
        //     Route::get('/list', [HomeManagement::class, 'index'])->name('admin.blogs.list');
        //     Route::get('/add', [BlogManagement::class, 'add'])->name('admin.blogs.add');
        //     Route::post('/save', [BlogManagement::class, 'save'])->name('admin.blogs.save');
        //     Route::get('/edit/{id}', [BlogManagement::class, 'add'])->name('admin.blogs.edit');
        // });

        Route::get('/site-settings', [SiteManagement::class, 'index'])->name('admin.site-settings');
        Route::post('/site-settings/save', [SiteManagement::class, 'save'])->name('admin.site-settings.save');

       
    });
});
