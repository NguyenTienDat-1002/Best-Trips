<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request){
        
        $tourID = $request->tour_id;
        $rating = $request->rating;
        DB::beginTransaction();
        Comment::create([
            'user_id' => Auth::user()->id,
            'tour_id' => $tourID,
            'content' => $request->content,
            'rate' => $request->rating,
            'time' => Carbon::now()
        ]);
        DB::commit();

        return redirect()->back();
    }
}
