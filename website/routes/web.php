<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\BlogController;


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
});


Route::get('/layout', function () {
    return view('layout.layout');
});


Route::get('/admin1', function () {
    return view('adminlayout.adminlayout');
});

Route::get('/blogs/index',[BlogController::class,'index'])->name('blogs.index');

Route::get('/blogs/create',[BlogController::class,'create'])->name('blogs.create');

Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');

Route::get('/blogmain', [WebpageController::class, 'blogs'])->name('blogmain');
Route::get('/home', [WebpageController::class, 'home'])->name('home');
Route::get('/blogdetail/{service}', [WebpageController::class, 'blogdetail'])->name('blogdetail');
Route::get('/about', [WebpageController::class, 'about'])->name('about');

require __DIR__.'/auth.php';



