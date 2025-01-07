<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/product/e-commerce', 'shop_comm');
    Route::get('/product/blog', 'shop_blog');
    Route::get('/contact', 'contact');
    Route::post('/contact', 'sub_contact');
    Route::get('product/{id}/order', 'order');
    Route::post('product/{id}/order','place_order');
    Route::get('product/{id}/detail', 'detail');
    Route::get('/search',  'dy_search')->name('search');
    // Route::get('/admin-add','Admin_add_page');
    // Route::get('/admin-del','Admin_del_page');
    // Route::get('/admin-upd','Admin_upd_page');
    // Route::get('/admin-view','Admin_view_page');
    // Route::get('/admin-panel','Admin_page');
    // Route::get('/login','login');
});
Route::controller(ProductController::class)->group(function(){
    Route::get('Admin','index');
    Route::get('Admin/add','Admin_add_page');
    Route::post('Admin/add','create_pro');
    Route::get('Admin/{id}/update','Admin_upd_page');
    Route::get('Admin/{id}/delete','Admin_del_page');
    Route::get('Admin/view','Admin_view_page');
    Route::get('Admin/orders','Admin_view_orders');
    Route::put('Admin/{id}/update','Admin_update_page');
    Route::get('Admin/queries','Admin_view_queries');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/Admin', function () {
    return view('admin.Admin-opt-page');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
