<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function(){
    echo 'PONG > Test OK';
});


// User routes
Route::POST('/user', 'RegisterController@createAccount')->name('user.store');
Route::PUT('/user/:id', 'RegisterController@updateUser')->name('user.update');
Route::POST('/user/login', 'LoginController@userLogin')->name('user.login');
