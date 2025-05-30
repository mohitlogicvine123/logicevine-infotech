<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboradController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\IndustriesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;

// website front
// Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('/', [WebController::class, 'ind'])->name('web.index'); // get ind in front end

Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs'); // get blog

Route::get('/about-us', [WebController::class, 'about'])->name('web.about-us');
Route::get('/carrier', [WebController::class, 'carrier'])->name('web.carrier'); // get carrer page in web site
Route::get('/our-gallery', [WebController::class, 'gallery'])->name('web.our-gallery');
Route::any('contact-us', [WebController::class, 'contact'])->name('web.contact-us');
Route::get('blog', [WebController::class, 'bloglist'])->name('web.blog'); // get blog page in front end
Route::get('blogdeatils', [WebController::class, 'blogdeatils'])->name('web.blogdeatils'); // get blog details in front end
Route::any('/web-development', [WebController::class, 'webdevelopment'])->name('web-development');
Route::any('/mobile-app-development', [WebController::class, 'mobileappdevelopment'])->name('mobile-app-development');
Route::any('/software-development', [WebController::class, 'softwaredevelopment'])->name('software-development');
Route::any('/ecommerce-development', [WebController::class, 'ecommerce'])->name('ecommerce-development');
Route::any('contact-us', [WebController::class, 'contact'])->name('web.contact-us');



// Redirect /admin to login
Route::redirect('/admin', '/admin/login');

// Admin Login routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginpost'])->name('login-post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Protected Admin routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboradController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('industries', IndustriesController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('carreer', CareerController::class);
});


Route::get('/contact',[ContactController::class,'create'])->name('contact');
Route::post('/store',[ContactController::class,'store'])->name('store');
Route::get('/admin/enquiries', [ContactController::class, 'index'])->name('admin.enq.index');
Route::delete('/destroy{id}',[ContactController::class,'destroy'])->name('destroy');


// Route::get('/', [HomeController::class, 'ind']);
