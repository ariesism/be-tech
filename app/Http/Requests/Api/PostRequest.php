<?php

namespace App\Http\Requests\Api;

use App\Helpers\ResponseHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5'],
            'content' => ['required'],
            'image' => [($this->getMethod() === 'POST') ? 'required' : '',
                'file',
                'image',
            ],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        ResponseHelper::sendError('validation error', $validator->errors());
    }
}
