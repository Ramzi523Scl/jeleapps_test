<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistrationUserRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'email'    => 'required|string|email|unique:users,email',
			'password' => 'required|string|min:8',
			'gender'   => ['required', 'string', Rule::in(User::GENDERS)]
		];
	}

}
