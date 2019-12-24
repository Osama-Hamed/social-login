<?php

namespace App\Services;

use Socialite;
use App\User;
use App\SocialAuthCredential;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str ;

class SocialAuthService
{
	protected $provider;

	public function __construct($provider)
	{
		$this->provider = $provider;
	}

	public function hitProvider()
	{
		return Socialite::driver($this->provider)->redirect();
	}

	public function attempt()
	{
		$provider_user = Socialite::driver($this->provider)->user();

		$social_auth_credentials = SocialAuthCredential::credentails($this->provider, $provider_user->id);
		if ($social_auth_credentials) return auth()->login($social_auth_credentials->owner);

		$user = User::firstOrCreate(
			['email' => $provider_user->email],
			['name' => $provider_user->name, 'password' => Hash::make(Str::random(8))]
		);

		SocialAuthCredential::create([
			'user_id' => $user->id,
			'provider_user_id' => $provider_user->id,
			'provider' => $this->provider
		]);

		return auth()->login($user);
	}
}