<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Requests\Api\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (! auth()->attempt($request->only('username' , 'password'))) {
            ResponseHelper::sendError('The provided credentials are incorrect');
        }
        
        return new UserResource(auth()->user());
    }
}
