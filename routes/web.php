<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;



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

$controller_path = 'App\Http\Controllers';
Route::resource('/front', FrontController::class);

// Main Page Route
Route::post('do-login', [LoginController::class, 'doLogin'])->name('do-login');
route::group(['middleware' => 'auth','namespace'=>'App\Http\Controllers'], function () {
    Route::get('/', 'Analytics@index')->name('home');
        route::group(['prefix'=>'dashboard'], function () {
            Route::resource('/parking', 'parkingController');
        });
});
Auth::routes();
