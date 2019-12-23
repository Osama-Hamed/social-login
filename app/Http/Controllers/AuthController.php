<?php

namespace App\Http\Controllers;

use App\Http\Requests\{RegisterRequest, LoginRequest};

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
    	return view('auth.register');
    }

    public function register(RegisterRequest $form)
    {
    	$form->save();

    	return redirect()->route('home');
    }

    public function showLoginForm()
    {
    	return view('auth.login');
    }

    public function login(LoginRequest $form)
    {
    	return $form->save() ?
		 	redirect()->route('home') :
		 	back()->withErrors(['loginError' => 'Please check your credentials and try again.']);
    }

    public function logout()
    {
    	auth()->logout();

    	return redirect()->route('login');
    }
}
