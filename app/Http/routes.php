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

Route::get('/', function () {

    return view('index');
});

Route::get('/main', 'AuthenticationUser@getMain');

Route::get('/login','AuthenticationUser@getLogin');

Route::get('/register', 'AuthenticationUser@getRegister');

Route::Post('/login','AuthenticationUser@postLogin');

Route::post('/register', 'AuthenticationUser@postRegister');

Route::get('/logout', 'AuthenticationUser@getLogout');

