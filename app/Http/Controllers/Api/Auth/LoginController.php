<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => "required",
            "password" => "required"
        ]);
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Invalid email or password'
            ], 422);
        }
        $user = $request->user();
        $token = $user->createToken("mobile");
        return [
            'user' => $user,
            'token' => $token->accessToken
        ];
    }

    public function logout(Request $request)
    {
        $request->user()->token()->delete();
        return [
            'status' => 'ok',
            "message" => 'Logged out'
        ];
    }
}
