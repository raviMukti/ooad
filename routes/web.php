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

// Route PagesController ke method beranda()
Route::get('/', 'PagesController@beranda');

// Route PagesController ke method tentang()
Route::get('/tentang', 'PagesController@tentang');

// Route PagesController ke method bantuan()
Route::get('/bantuan', 'PagesController@bantuan');

// Route PagesController ke method proposal()
Route::get('/proposal', 'PagesController@proposal');

// Route PagesController ke method masuk()
Route::get('/masuk', 'PagesController@masuk');

// Route PagesController ke method daftar()
Route::get('/daftar', 'PagesController@daftar');
