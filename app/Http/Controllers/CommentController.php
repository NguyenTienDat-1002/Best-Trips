<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use Carbon\Carbon;

class CommentController extends Controller
{
    //
    public function store(Request $request, $id){
        $comment =Comment::create([
            'tour_id'=>$id,
            'user_id'=>Auth::user()->id,
            'content'=>$request->content,
            'rate'=>isset($request->rating)?$request->rating:0,
            'time' => Carbon::now('GMT+7'),
        ]);
        
        $rate = Comment::where('tour_id', $id)->where('rate','!=', 0)->avg('rate');

        $tour = Tour::findOrFail($id);
        $tour->update([
            'rate'=> round($rate)
        ]);

        return redirect()->back();
    }
}
