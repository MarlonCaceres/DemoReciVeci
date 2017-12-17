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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','FrontController@index');	
Route::get('home','FrontController@index');	

Route::get('que_hacemos','FrontController@practica');	

Route::get('como_reciclar','FrontController@reciclar');	

Route::get('conoce_a_tu_reciclador','FrontController@reciclador');	

Route::get('nosotros','FrontController@nosotros');	

Route::get('involucrate','FrontController@involucrate');	

Route::get('faq','FrontController@faq');	

Route::resource('mail','MailController');	