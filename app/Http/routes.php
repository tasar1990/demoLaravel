<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('admin.welcome');
// });
Route::get('/admin', 'admin\HomeController@index');
Route::post('/login', 'admin\HomeController@create');
// Route::post('/login', function () {
//     echo "<pre>";print_r($_POST);
// });