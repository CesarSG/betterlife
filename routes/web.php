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

Route::get('/hola', function () {
    return view('welcome');
});

Route::get('/', 'PaginasController@index')->name('index');
Route::get('/nosotros', 'PaginasController@about')->name('about');
Route::get('/causas', 'PaginasController@causes')->name('causes');
Route::get('/galeria', 'PaginasController@gallery')->name('gallery');
Route::get('/noticias', 'PaginasController@news')->name('news');
Route::get('/contacto', 'PaginasController@contact')->name('contact');
Route::get('/adminsss', 'PaginasController@admin')->name('admin');

Route::get('/admin', 'PaginasController@dashboard')->name('dashboard');
Route::get('/admin/usuario', 'PaginasController@user')->name('user');
Route::get('/admin/tablas', 'PaginasController@tables')->name('tables');
Route::get('/admin/notificacion', 'PaginasController@notification')->name('notification');
Route::get('/admin/evento', 'PaginasController@event')->name('event');
Route::get('/admin/paneles', 'PaginasController@panels')->name('panels');

Route::get('/entrar', 'PaginasController@entrar')->name('entrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
