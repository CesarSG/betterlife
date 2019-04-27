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
Route::get('/', 'PaginasController@index')->name('index');
Route::get('/nosotros', 'PaginasController@about')->name('about');
Route::get('/causas', 'PaginasController@causes')->name('causes');
Route::get('/galeria', 'PaginasController@gallery')->name('gallery');
Route::get('/noticias', 'PaginasController@news')->name('news');
Route::get('/contacto', 'PaginasController@contact')->name('contact');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');

Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');

Route::get('/registro', 'UserController@register')->name('register.user')->middleware('auth', 'role');
Route::post('/user/register', 'UserController@create')->name('create.user');


Route::group(['prefix'=>'admin'], function(){
  Route::get('', 'PaginasController@dashboard')->name('dashboard');
  Route::get('usuario', 'PaginasController@user')->name('user');
  Route::get('tablas', 'PaginasController@tables')->name('tables');
  Route::get('team', 'PaginasController@team')->name('team');
  Route::get('notificacion', 'PaginasController@notification')->name('notification');
  Route::get('evento', 'PaginasController@event')->name('event');
  Route::get('paneles', 'PaginasController@panels')->name('panels');
});
