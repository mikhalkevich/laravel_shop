<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('welcome');
});
Route::get('basket', [Controllers\BasketController::class, 'getIndex'])->name('basket');
Route::post('basket/order',[Controllers\BasketController::class, 'postOder']);
Route::get('catalog_add_product/{catalog}', [Controllers\CatalogController::class, 'addProduct'])->name('catalog_add_product');
Route::get('catalog_delete_product/{catalog}', [Controllers\CatalogController::class, 'detachProduct']);
Route::get('catalogs', [Controllers\CatalogController::class, 'getIndex'])->name('catalogs');
Route::get('catalog/{catalog}', [Controllers\CatalogController::class, 'getOne'])->name('catalog');


Route::prefix('dashboard')->middleware(['auth', 'verified'])->controller(Controllers\HomeController::class)->group(function(){
    Route::get('/', 'getIndex')->name('dashboard');
    Route::post('/', 'postIndex');
});

require __DIR__.'/auth.php';

//for admin
Route::prefix('adminka')->middleware('admin')->group(function(){
    Route::get('/', [Controllers\OrderController::class, 'getAll'])->name('adminka');
    //maintext
    Route::controller(Controllers\MaintextController::class)->group(function () {
        Route::get('maintext', 'getAll');
        Route::get('maintext/{maintext}', 'getEdit');
        Route::post('maintext/{maintext}', 'postUpdate');
    });
    //orders
    Route::controller(Controllers\OrderController::class)->group(function(){
        Route::get('orders', 'getAll');
        Route::get('order/{order}', 'getEdit');
        Route::post('order/{order}', 'postUpdate');
    });
});

//ended routers
Route::get('{url}', [Controllers\MaintextController::class, 'getUrl']);
