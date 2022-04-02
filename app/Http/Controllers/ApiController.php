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

class ApiController extends Controller
{
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request){
        try{
            $tourID = $request->tour_id;
            DB::beginTransaction();
            Comment::create([
                'user_id' => "2",
                'tour_id' => $tourID,
                'content' => "",
                'rate' => 0,
                'time' => Carbon::now()
            ]);
            DB::commit();

            return response()->json([
                'name' => 'Abigail',
                'state' => 'CA',
            ]);
        }catch(e){

        }
    }
}
