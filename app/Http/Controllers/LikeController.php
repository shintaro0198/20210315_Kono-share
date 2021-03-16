<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Share;

class LikeController extends Controller
{
    public function store(Request $request,$id){
        $item = Share::where('id',$id)->first();
        $content = new Like;
        $content->id = $item->id;
        $content->num = $request->num;
        $content->share_id = $request->share_id;
        $content->user_id = $item->user_id;
        $content->save();
        return response()->json([
            'message' => 'created successlly',
            'data' => $content
        ]);
    }
    public function destroy($id){
        $item = Like::where('id',$id)->first();
        $item->delete();
        return response()->json([
            'message' => 'deleted successlly'
        ],200);
    }
}
