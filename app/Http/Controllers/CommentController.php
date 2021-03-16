<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request,$id){
        $item = Share::where('id',$id)->first();
        $content = new Comment;
        $content->id = $item->id;
        $content->share_id = $request->share_id;
        $content->user_id = $item->user_id;
        $content->content = $request->content;
        $content->save();
        return response()->json([
            'message'=>'created successlly',
            'data'=>$content,
        ],200);
    }
}
