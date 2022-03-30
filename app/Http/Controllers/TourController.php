<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('newtour');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
        DB::beginTransaction();
        $tour = Tour::create([
            'title' => $request->title,
            'price' => $request->price,
            'duration' =>$request->duration,
            'departure_point' => $request->departure,
            'departure_time' =>$request->time,
            'sales' => $request->sale,
        ]);
        Storage::disk('local')->put('overview/'.$tour->id.'.txt',$request->overview);
        $tour->update([
            'overview' => 'overview/'.$tour->id.'.txt',
            'img'=>'http://127.0.0.1:8000/storage/'.$request->file('img')->storeAs('tours/img', $tour->id.'.'.$request->file('img')->getClientOriginalExtension(), 'public'),
        ]);
        DB::commit();
        return redirect()->back();
        }catch(e){
            DB::rollback();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tour = Tour::findOrFail($id);
        //$tours= DB::select("select * from tour where price*(100-sales)/100 between {$tour->price}*0.9 And {$tour->price}*1.1" );
        $tours = Tour::whereBetween('price', [$tour->price *0.9,$tour->price *1.1])->where('id',"!=",$tour->id)->get();
         if(count($tours)>=4)
            $tours=$tours->random(4); 
        $overview=Storage::disk('local')->get($tour->overview);
         return view('tourdetails', ['tour' => $tour, 'tours' => $tours, 
                     'overview'=>str_replace("\n",'<br>',htmlentities($overview))]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tour = Tour::where('id',$id);
        $tour->delete();
        return redirect(url('/tours'));
    }

    public function search(Request $request){
        $tours=Tour::where('title','like', "%{$request->key}%");
        
        if($request->time)
            $tours->where('departure_time','>',$request->time);

        return view('tours',['tours'=> $tours->paginate()]);

    }

    public function book(){
        return view('book');
    }
}
