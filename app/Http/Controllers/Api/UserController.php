<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller 
{
    // user details api
    public function details(Request $request) 
    { 
        $user = $request->user();
         return [
            'user' => $user
         ]; 
    } 
}