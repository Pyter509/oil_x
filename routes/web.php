<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('main');
})->name('jini');

Route::get('/about',[HomeController::class,'about'])->name('guest.about');
Route::get('/contact',[HomeController::class, 'contacts'])->name('guest.contacts');
Route::get('/services',[HomeController::class, 'services'])->name('guest.services');
Route::get('/home',[HomeController::class,'index'])->name('user.home');
Route::get('/user/main',[HomeController::class,'main'])->name('user.main');
Route::get('/user/history',[HomeController::class,'history'])->name('user.history');
Route::get('/user/appointments',[HomeController::class,'appointments'])->name('user.appointments');
Route::get('/user/profile',[HomeController::class,'profile'])->name('user.profile');
Route::get('/user/ask',[HomeController::class,'oil'])->name('user.ask');

Route::get('admin/home',[AdminController::class,'home'])->name('admin.home');
Route::get('admin/manage',[AdminController::class,'manage'])->name('admin.manage');
Route::get('admin/add',[AdminController::class,'add'])->name('admin.add');

Route::get('admin/customers',[AdminController::class,'customers'])->name('admin.customers');
Route::get('admin/appointments',[AdminController::class,'appointments'])->name('admin.appointments');
Route::get('admin/payments',[AdminController::class,'payee'])->name('admin.payee');



//OilController 
Route::post('/search',[OilController::class,'search'])->name('oil.search');
Route::post('/oil/edit',[OilController::class,'edit'])->name('oil.edit');

Route::post('/oil/destroy',[OilController::class,'destroy'])->name('oil.destroy');


Route::middleware('guest')->group(function () {
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

