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
    Route::match(['get', 'post'], 'addprofile', 'ProfileController@createProfile');
    Route::get('profile', 'ProfileController@editProfile');
    Route::get('changepassword', 'ProfileController@changePass');
    Route::post('updatepassword', 'ProfileController@updatePass');
});

Route::group(['prefix' => 'online'],function () { 
    Route::get('/pay', 'BillplzController@startpay');
});
