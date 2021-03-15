<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareUser;

class LoginController extends Controller
{
    public function collation(Request $request,ShareUser $shareuser)
    {   
        if($shareuser->email===$request->email||$shareuser->password===$request->password)
        { 
            $item = ShareUser::where('email', $shareuser->email)->first();
            return response()->json([
                'message' => $item,
            ],200);
        }
    }
}
