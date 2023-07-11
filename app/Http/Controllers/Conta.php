<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Conta extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)

    {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($token = Auth::guard('api')->attempt($credentials))
        {
            return [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
            ];

        }

       abort(401, 'Unauthorized');
    }
}
