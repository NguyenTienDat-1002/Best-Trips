<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
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
            'time' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
