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

Route::get('/', 'IndexController@index')->name('index');

// BM SERVICES
Route::get('/serviciosbm', 'IndexController@servicios_bm_menu');

// BI
Route::get('/serviciosbm/intelligence', 'BusinessIntelligenceController@index');
Route::match(['get', 'post'], '/serviciosbm/intelligence/products/{location_id?}', function($location_id = null) {
  return (new BusinessIntelligenceController)->getProducts($location_id);
});

// CART
Route::get('/serviciosbm/cart', 'CartController@index')->name('serviciosbm.cart');

// TELEGRAM
Route::get('/serviciosbm/telegram', 'TelegramController@index');

// Email
Route::match(['post'], '/contact/send_email', function() {
  return (new IndexController)->send_email();
});
Route::match(['post'], '/add_news_subscription', function() {
  return (new IndexController)->add_news_subscription();
});


// CONST
define('INFO_EMAIL', 'carlos@geneticsoftware.net,stefania@geneticsoftware.net');
// SYSTEM MESSAGES
define('INFO_TITLE', 'Mensaje enviado');
define('INFO_MESSAGE', 'Gracias por su interés en contactarnos, pronto estaremos respondiéndole.');
define('SUBSCRIPTION_TITLE', 'Suscripción realizada');
define('SUBSCRIPTION_MESSAGE', 'Gracias por ser parte de nuestras comunidad de contactos.');

//return Response::json($products);
