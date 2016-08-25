<?php

/*
Paihz.com creator instav2
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('verification/error', 'Auth\RegisterController@getVerificationError');
Route::get('verification/{token}', 'Auth\RegisterController@getVerification');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'user'],function () { 
    Route::get('/profile', 'ProfileController@editprofile');
});

Route::group(['prefix' => 'online'],function () { 
    Route::get('/pay', 'BillplzController@startpay');
});
