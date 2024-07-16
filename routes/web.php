<?php

use App\Http\Controllers\AdminAuth\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\PartnerAndClientController;
use App\Http\Controllers\RequestAQuoteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashIndex'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'still-united'],function () {
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('contactUs');
    Route::get('/our-services', [HomeController::class, 'our_services'])->name('our_services');
    Route::get('/request-a-quote', [HomeController::class, 'requestQuote'])->name('requestQuote');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::post('request-a-quote/store', [RequestAQuoteController::class, 'store'])->name('quote.store');
    // Route::get('/dashboard', [MainDashboardController::class, 'index'])->name('dashboard.index');
    Route::fallback(function () {
        return view('pages.404');
    });
});

Route::group(['prefix' => '/dashboard/services'], function () {
    Route::get('/', [ServiceController::class, 'index'])->name('service.index');
    Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('show/{id}', [ServiceController::class, 'show'])->name('service.show');
    Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
});

Route::group(['prefix' => '/dashboard/partners-or-clients'], function () {
    Route::get('/', [PartnerAndClientController::class, 'index'])->name('partnerAndClient.index');
    Route::post('/store', [PartnerAndClientController::class, 'store'])->name('partnerAndClient.store');
    Route::get('create', [PartnerAndClientController::class, 'create'])->name('partnerAndClient.create');
    Route::get('show/{id}', [PartnerAndClientController::class, 'show'])->name('partnerAndClient.show');
    Route::get('edit/{id}', [PartnerAndClientController::class, 'edit'])->name('partnerAndClient.edit');
    Route::post('update/{id}', [PartnerAndClientController::class, 'update'])->name('partnerAndClient.update');
    Route::get('delete/{id}', [PartnerAndClientController::class, 'destroy'])->name('partnerAndClient.destroy');
});

Route::group(['prefix' => '/dashboard/categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::group(['prefix' => '/dashboard/admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('show/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
});


Route::group(['prefix' => '/dashboard/blog'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('show/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
});

Route::group(['prefix' => '/dashboard/tags'], function () {
    Route::get('/', [TagsController::class, 'index'])->name('tag.index');
    Route::post('/store', [TagsController::class, 'store'])->name('tag.store');
    Route::get('create', [TagsController::class, 'create'])->name('tag.create');
    Route::get('show/{id}', [TagsController::class, 'show'])->name('tag.show');
    Route::get('edit/{id}', [TagsController::class, 'edit'])->name('tag.edit');
    Route::post('update/{id}', [TagsController::class, 'update'])->name('tag.update');
    Route::get('delete/{id}', [TagsController::class, 'destroy'])->name('tag.delete');
});

Route::group(['prefix' => '/dashboard/request-a-quote'], function () {
    Route::get('/', [RequestAQuoteController::class, 'index'])->name('quote.index');
    Route::post('/store', [RequestAQuoteController::class, 'storeFromDashboard'])->name('quote.store');
    Route::get('create', [RequestAQuoteController::class, 'create'])->name('quote.create');
    Route::get('show/{id}', [RequestAQuoteController::class, 'show'])->name('quote.show');
    Route::get('edit/{id}', [RequestAQuoteController::class, 'edit'])->name('quote.edit');
    Route::post('update/{id}', [RequestAQuoteController::class, 'update'])->name('quote.update');
    Route::get('delete/{id}', [RequestAQuoteController::class, 'destroy'])->name('quote.delete');
});

Route::group(['prefix' => '/dashboard/setting'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('setting.index');
    Route::get('show/{id}', [SettingController::class, 'show'])->name('setting.show');
    Route::get('edit/{setting}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::post('update/{id}', [SettingController::class, 'update'])->name('setting.update');
});

Route::group(['prefix' => '/dashboard/contact-us'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::get('show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');
});


