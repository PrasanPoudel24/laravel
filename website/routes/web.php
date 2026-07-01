<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/contact', [WebpageController::class,'contacts'])->name('contacts');
    Route::get('/blogs/index',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/view/{id}',[BlogController::class,'view'])->name('blogs.view');
Route::get('/blogs/edit/{id}',[BlogController::class,'edit'])->name('blogs.edit');

Route::post('/blogs/update/{id}',[BlogController::class,'update'])->name('blogs.update');
Route::delete('/blogs/destroy/{id}',[BlogController::class,'destroy'])->name('blogs.destroy');

Route::get('/test/index',[StudentController::class,'index'])->name('test.index');
Route::get('/test/view/{id}',[StudentController::class,'view'])->name('test.view');
Route::get('/test/edit/{id}',[StudentController::class,'edit'])->name('test.edit');

Route::post('/test/update/{id}',[StudentController::class,'update'])->name('test.update');
Route::delete('/test/destroy/{id}',[StudentController::class,'destroy'])->name('test.destroy');
Route::get('/test/create',[StudentController::class,'create'])->name('test.create');
Route::get('/blogs/create',[BlogController::class,'create'])->name('blogs.create');
Route::post('/test/store',[StudentController::class,'store'])->name('test.store');
Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');


Route::get('/home', [WebpageController::class, 'home'])->name('home');
Route::get('/blogdetail/{service}', [WebpageController::class, 'blogdetail'])->name('blogdetail');
Route::get('/about', [WebpageController::class, 'about'])->name('about');




Route::get('/banner/index',[BannerController::class,'index'])->name('banner.index');
Route::get('/banner/create',[BannerController::class,'create'])->name('banner.create');
Route::post('/banner/store',[BannerController::class,'store'])->name('banner.store');
Route::get('/banner/edit/{id}',[BannerController::class,'edit'])->name('banner.edit');
Route::post('/banner/update/{id}',[BannerController::class,'update'])->name('banner.update');
Route::get('/banner/destroy/{id}',[BannerController::class,'destroy'])->name('banner.destroy');
});


Route::get('/layout', function () {
    return view('layout.layout');
});


Route::get('/admin1', function () {
    return view('adminlayout.adminlayout');
});

Route::get('/blogmain', [WebpageController::class, 'blogs'])->name('blogmain');

require __DIR__.'/auth.php';



