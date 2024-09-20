<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about',[HomeController::class,'about'])->name('guest.about');
Route::get('/contact',[HomeController::class, 'contacts'])->name('guest.contacts');
Route::get('/services',[HomeController::class, 'services'])->name('guest.services');
Route::get('/home',[HomeController::class,'index'])->name('user.home');


//OilController 
Route::post('/search',[OilController::class,'search'])->name('oil.search');

Route::middleware('is_admin')->group(function () {
});


require __DIR__.'/auth.php';
