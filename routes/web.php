<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BusinessIntelligenceController;

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

Route::get('/', 'IndexController@index');

// BM SERVICES
Route::get('/serviciosbm', 'IndexController@servicios_bm_menu');

// BI
Route::get('/serviciosbm/intelligence', 'BusinessIntelligenceController@index');
Route::match(['get', 'post'], '/serviciosbm/intelligence/products', function() {
  return (new BusinessIntelligenceController)->getProducts();
});

// CART
Route::get('/serviciosbm/cart', 'CartController@index')->name('serviciosbm.cart');

// TELEGRAM
Route::get('/serviciosbm/telegram', 'TelegramController@index');

//return Response::json($products);
