<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Share;

class LikeController extends Controller
{
    public function update(Like $like , Share $share){
        $item = Share::where('id',$share->id)->first();
        $content = new Like;
        $content->id = $item->id;
        $content->user_id=$item->user_id;
        $content->share_id=
        $item->save();
        return response()->json([
            'message' => $item,
            'data' => $item,
        ],200);
    }
    public function destroy(Request $request, Like $like){
        $item = Like::where($request->share_id,$like->share_id)->first();
        $item->num->delete();
        
    },,,,,,,,
}
