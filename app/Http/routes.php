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
//     return view('welcome');
// });

// Route::resource('names', ['middleware' => 'jwt.auth', 'NameController']);

// Route::get('/', ['middleware' => 'jwt.auth', function() {
//     echo 'You are logged in!';
// }]);

Route::post('api/login', 'SingInController@login');

Route::post('api/registration', 'SingInController@register');

Route::post('api/delete', 'SingInController@deleteUserFromTable');

Route::resource('api', 'SingInController', ['except' => ['index', 'store', 'update']]);