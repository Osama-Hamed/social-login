<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::get('/login', 'AuthController@showLoginForm')->name('login');
