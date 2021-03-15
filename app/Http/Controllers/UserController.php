<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareUser;

class UserController extends Controller
{
    public function index(Request $request,ShareUser $shareuser){
        $item = ShareUser::where('id', $shareuser->id)->first();
        if ($item){
            return response()->json([
                'message' => $item,
            ], 200);
        } else {
            return response()->json([
                'message' => 'NotFound',
            ],404);
        }
    }
    public function update(Request $request,ShareUser $shareuser){
        $item = ShareUser::where('id',$shareuser->id)->first();
        $item->name = $request->name;
        $item->save();
        if ($item){
            return response()->json([
                'message' => $item,
            ], 200);
        } else{
            return response()->json([
                'message' => $item
            ],404);
        }
        
    }
}
