<?php

namespace App\Http\Requests\Api;

use App\Helpers\ResponseHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        ResponseHelper::sendError('validation error', $validator->errors());
    }
}
