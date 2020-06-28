<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\OTPVerification;
use App\User;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email|unique:users",
/*            "phone" => "required|unique:users|numeric|digits:10",
*/            "password" => "required|min:4"
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return $user;
    }
}
