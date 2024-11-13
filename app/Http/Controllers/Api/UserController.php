<?php

namespace App\Http\Controllers\Api;

use App\Actions\User\ProfileUserAction;
use App\Actions\User\RegistrationUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegistrationUserRequest;
use App\Http\Resources\User\UserResource;

class UserController extends Controller
{
	public function registration(RegistrationUserRequest $request, RegistrationUserAction $action): array
	{
		return $action->handle($request);
	}

	public function profile(ProfileUserAction $action): UserResource
	{
		return new UserResource($action->handle());
	}
}
