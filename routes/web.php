<?php

/*
Paihz.com creator instav2
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('verification/error', 'Auth\RegisterController@getVerificationError');
Route::get('verification/{token}', 'Auth\RegisterController@getVerification');
Route::get('/home', 'HomeController@index');

