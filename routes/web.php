<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\MainController::class, 'aboutUs'])->name('aboutUs');

Route::get('/index', [Controllers\MainController::class, 'index'])->name('index');

Route::get('/contacts', [Controllers\MainController::class, 'contacts'])->name('contacts');

Route::get('/delivery', [Controllers\MainController::class, 'delivery'])->name('delivery');

Route::post('dataInsert', [Controllers\SubscriberController::class, 'DataInsert']);

Route::delete('/delete-cart-product', [Controllers\CartController::class, 'deleteProduct'])->name('delete.cart.product');

Route::get('/cart', [Controllers\CartController::class, 'cart'])->name('cart');

Route::get('/catalog', [Controllers\CatalogController::class, 'catalog'])->name('catalog');

Route::get('/product/{id}', [Controllers\ProductController::class, 'product'])->name('product');



