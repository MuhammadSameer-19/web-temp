<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web_controller;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });
Route::controller(WebController::class)->group(function () {
    Route::get('', 'home');
    Route::get('/product', 'shop');
    Route::get('/contact', 'contact');
    Route::get('/order', 'order');
    Route::get('/detail', 'detail');
    Route::get('/admin-add','Admin_add_page');
    Route::get('/admin-del','Admin_del_page');
    Route::get('/admin-upd','Admin_upd_page');
    Route::get('/admin-view','Admin_view_page');
    // Route::get('/admin-panel','Admin_page');
    // Route::get('/login','login');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin-panel', function () {
    return view('web.Admin-opt-page');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
