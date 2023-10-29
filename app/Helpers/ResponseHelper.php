<?php

namespace App\Helpers;

use Illuminate\Http\Exceptions\HttpResponseException;

class ResponseHelper 
{
    public static function sendError($message, $errors = [], $code = 403)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (! empty($errors)) {
            $response['data'] = $errors;
        }

        throw new HttpResponseException(response()->json($response, $code));
    }

    public static function sendSuccess($message, $data = [], $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if (! empty($data)) {
            $response['data'] = $data;
        }

        throw new HttpResponseException(response()->json($response, $code));
    }
}