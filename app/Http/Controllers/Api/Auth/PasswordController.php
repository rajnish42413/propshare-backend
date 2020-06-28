<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ForgotOTPVerification;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordResetCode;

class PasswordController extends Controller
{
    public function forgot(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
        ]);        
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found in our database'
            ], 422);
        }

        if (!$user->phone) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not set phone number'
            ], 422);
        }


        // logic here 


        return [
            'status' => 'ok',
            'message' => 'Otp send to your mobile number',
            'user' => $user,
            'otp' =>$otp
        ];
    }

    public function reset(Request $request)
    {
        $this->validate($request, [
            'otp' => 'required',
            'password' => 'required',
            'email' =>'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found in our database'
            ], 422);
        }

        // login here 
    
        return response()->json([
            'status' => 'ok',
            'message' => 'Password Changed successfully',
            'user' => $user
        ]);
    }

    public function generateOtp(User $user)
    {
        return rand(100000, 999999);
    }
}
