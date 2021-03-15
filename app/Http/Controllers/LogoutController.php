<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function out(){
        return response()->json([
            'message' => 'Success',
        ],200);
    }
}
