<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//public routes
Route::get('catalogs',[Controllers\CatalogController::class, 'getAll']);
Route::post('register', [Controllers\AuthController::class, 'register']);
Route::post('login', [Controllers\AuthController::class, 'login'])->name('login_api');
Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('logout',[Controllers\AuthController::class, 'logout']);
    Route::get('profile',[Controllers\AuthController::class, 'profile']);
});
Route::post('user/{id}/add_picture', [Controllers\UserController::class, 'addPicture']);
Route::post('catalog/{id}/add_picture', [Controllers\CatalogController::class, 'addPicture']);
