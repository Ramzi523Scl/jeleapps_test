<?php

namespace App\Actions\User;

use App\Http\Requests\User\RegistrationUserRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileUserAction
{
	public function handle(): User
	{
		$user = Auth::user();
		return $user;
	}
}