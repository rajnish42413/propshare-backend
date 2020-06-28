<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Media; 
use Illuminate\Support\Facades\Auth; 

class MediaController extends Controller 
{
    // user details api
    public function index(Request $request) 
    { 
       return $media = Media::paginate(); 
    } 
}