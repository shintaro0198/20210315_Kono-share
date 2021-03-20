<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;

class SharesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Share::all();
        return response()->json([
            'message' =>'ok',
            'data' => $item,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Share;
        $item->user_id = $request->user_id;
        $item->share = $request->share;
        $item->save();
        if ($item){
        return response()->json([
            'message'=>'Created successfully',
            'data' => $item
        ],200);
        } else {
            return response()->json([
                'message'=>'failed',
            ],404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function show(Share $share)
    {   
        
            $item = Share::where('user_id', $share->id)->first();
        };
        return response()->json([
            'message'=>$item,
            'data'=>$item,
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Share $share)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function destroy(Share $share)
    {
        $item = Share::where('id',$share->id)->first();
        $item->delete();
        return response()->json([
            'message'=>'deleted successfully',
        ],200);
    }
}
