<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareUser;

class RegisterController extends Controller
{
    public function store(Request $request){
        $item = new ShareUser;
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = $request->password;
        $item->profile = $request->profile;
        $item->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $item
        ],200);
    }
}
