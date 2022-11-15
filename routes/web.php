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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
