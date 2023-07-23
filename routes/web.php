<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/product');
});

Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('listProducts');
    Route::get('/create', 'create')->name('createProducts');
    Route::post('/store', 'store')->name('storeProducts');
    Route::get('/edit/{product}', 'edit')->name('editProducts');
    Route::put('/update/{product}', 'update')->name('updateProducts');
    Route::delete('/destroy/{product}', 'destroy')->name('destroyProducts');
});
