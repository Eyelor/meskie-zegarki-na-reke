<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::get('/informations', [App\Http\Controllers\InformationsController::class, 'index'])->name('informations');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'])->name('orders');
Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'store']);
Route::delete('/orders/destroy/{id}', [App\Http\Controllers\OrdersController::class, 'destroy'])->name('orders.destroy');
Route::get('/orders/edit/{id}', [App\Http\Controllers\OrdersController::class, 'edit'])->name('orders.edit');
Route::put('/orders/update/{id}', [App\Http\Controllers\OrdersController::class, 'update'])->name('orders.update');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/polityka-prywatnosci', function () {
    return view('polityka-prywatnosci');
});
Route::get('/warunki-korzystania', function () {
    return view('warunki-korzystania');
});
