<?php

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/', 'HomeController@index');
	Route::post('/logout', 'AuthController@logout')->name('logout.submit');
});

Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
	Route::get('/login', 'AuthController@showLoginForm')->name('login');
	Route::post('/register', 'AuthController@register')->name('register.submit');
	Route::post('/login', 'AuthController@login')->name('login.submit');

	Route::get('login/{provider}', 'SocialAuthController@redirectToProvider')->name('social.auth.redirect');
	Route::get('login/{provider}/callback', 'SocialAuthController@handleProviderCallback')->name('social.auth.callback');
});