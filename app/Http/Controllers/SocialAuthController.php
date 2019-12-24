<?php

namespace App\Http\Controllers;

use App\Services\SocialAuthService;

class SocialAuthController extends Controller
{
	public function redirectToProvider($provider, SocialAuthService $socialAuthService)
	{
		return $socialAuthService->hitProvider();
	}

	public function handleProviderCallback($provider, SocialAuthService $socialAuthService)
	{
		$socialAuthService->attempt();

		return redirect()->route('home');
	}
}