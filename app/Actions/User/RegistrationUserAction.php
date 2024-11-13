<?php

namespace App\Actions\User;

use App\Http\Requests\User\RegistrationUserRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class RegistrationUserAction
{
	public function handle(RegistrationUserRequest $request): array
	{
		$data = $request->validated();
		$user = User::create($data);

		$token = $user->createToken(config('app.name'))->plainTextToken;

		return [
			'token' => $token,
			'user'  => new UserResource($user)
		];

	}
}