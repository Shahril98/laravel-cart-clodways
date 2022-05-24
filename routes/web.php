<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//syntax route
//To create a route by Route::get('name of interface',[name of controller that be called::class, 'method'])-> name('name of interface');

Route::get('/', [PagesController::class, 'index']) -> name ('home');

Route::get('/shop', [ProductController::class, 'index']) -> name ('shop');

Route::get('/shop/{id}', [ProductController::class, 'show']) -> name ('product');

Route::get('/cart',[CartController::class, 'cart']) -> name ('cart');

Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']) ->name ('add.to.cart');

Route::get('/delete-from-cart/{id}', [CartController::class, 'delete']) ->name ('delete.from.cart');

Route::post('/update-from-cart/{id}', [CartController::class, 'update'])->name('update.from.cart');