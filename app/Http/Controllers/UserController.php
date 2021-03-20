<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareUser;

class UserController extends Controller
{
    public function show(Request $request){
        $item = ShareUser::all();
        if ($item){
            return response()->json([
                'message' => $item,
                'data'=>$item,
            ], 200);
        } else {
            return response()->json([
                'message' => 'NotFound',
            ],404);
        }
    }
    public function update(Request $request){
        $item = ShareUser::where('email',$request->email)->first();
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
