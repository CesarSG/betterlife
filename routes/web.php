<?php

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

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal')->name('paypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Route::get('/', 'PaginasController@index')->name('index');
Route::get('/nosotros', 'PaginasController@about')->name('about');
Route::get('/causas', 'PaginasController@causes')->name('causes');
Route::get('/galeria', 'PaginasController@gallery')->name('gallery');
Route::get('/noticias', 'PaginasController@news')->name('news');
Route::get('/contacto', 'PaginasController@contact')->name('contact');

Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/registro', 'UserController@register')->name('register.user')->middleware('auth', 'role');
Route::post('/user/register', 'UserController@create')->name('create.user');


Route::group(['prefix'=>'admin',  'middleware' => 'auth'], function(){
  Route::resource('causa', 'CauseController')->middleware('role');
  Route::resource('evento', 'EventController'); 
  Route::get('evento/{evento}/info', 'EventController@info')->name('evento.info');
  Route::resource('donacion', 'DonationController');
  Route::post('/donacion/{id}/editar', 'DonationDetailController@store');

  // Route::get('/donacion/{id}', 'DonationDetailController@destroy')->name('detail.destroy');
  // Route::post('/donacion/{id}/payment', 'DonationController@payment')->name('donacion.payment');
  // Route::get('', 'PaginasController@dashboard')->name('dashboard')->middleware('verified');
  Route::get('usuario', 'PaginasController@user')->name('user');
  Route::get('tablas', 'PaginasController@tables')->name('tables');
  Route::get('team', 'PaginasController@team')->name('team');
  Route::get('notificacion', 'PaginasController@notification')->name('notification');
  Route::get('paneles', 'PaginasController@panels')->name('panels');
});
