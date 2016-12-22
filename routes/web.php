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
| Route::get('/', function () {
|    return view('welcome');
| });
|
*/
Route::get('/', 'HomeController@form');
Route::get('register', 'HomeController@register');

//Administrative Routes
Route::get('home', 'AdminController@index');
Route::get('register', 'AdminController@register');
Route::post('register', 'AdminController@postRegister');

//Residents Routes
Route::post('residents', 'ResidentsController@store');

//Service Routes
Route::post('services', 'ServicesController@store');