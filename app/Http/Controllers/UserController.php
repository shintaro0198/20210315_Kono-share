<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareUser;

class UserController extends Controller
{
    public function show($id){
        $item = ShareUser::where('id',$id)->first();
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
    public function update(Request $request,$id){
        $item = ShareUser::where('id',$id)->first();
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
