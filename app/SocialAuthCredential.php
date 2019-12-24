<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAuthCredential extends Model
{
	protected $fillable = ['user_id', 'provider_user_id', 'provider'];

	public function owner()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public static function credentails($provider, $user_id)
	{
		return static::where('provider', $provider)
			->where('provider_user_id', $user_id)
			->first();
	}
}
