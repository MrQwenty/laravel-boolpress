<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	...

	public function articles()
	{
		return $this->hasMany('App\Article');
	}

}
