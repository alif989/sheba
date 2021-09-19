<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;


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


Auth::routes();
Route::get('/', [ 'as' => '/', 'uses' => 'ProductsController@index']);
Route::get('cart/{id?}', [ 'as' => 'cart', 'uses' => 'ProductsController@cart']);
Route::post('checkout', [ 'as' => 'checkout', 'uses' => 'ProductsController@checkout']);
Route::post('place_order', [ 'as' => 'place_order', 'uses' => 'ProductsController@placeOrder']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
