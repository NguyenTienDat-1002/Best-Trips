<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use App\Models\Province;

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
        $provinces=Province::all();
        return view('newtour')->with('provinces',$provinces);
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
                'departure_date' =>$request->time,
                'sales' => $request->sale,
    
            ]);
            Storage::disk('local')->put('overview/'.$tour->id.'.txt',$request->overview);
            Storage::disk('local')->put('description/'.$tour->id.'.txt',$request->description);
    
            $tour->update([
                'overview' => 'overview/'.$tour->id.'.txt',
                'description' => 'description/'.$tour->id.'.txt',
                'img'=>'http://127.0.0.1:8000/storage/'.$request->file('img')->storeAs('tours/img', $tour->id.'.'.$request->file('img')->getClientOriginalExtension(), 'public'),
                'video'=>'http://127.0.0.1:8000/storage/'.$request->file('video')->storeAs('tours/video', $tour->id.'.'.$request->file('video')->getClientOriginalExtension(), 'public'),
            ]);
    
            DB::commit();

            return redirect()->back();

        }catch(e){
            DB::rollback();
            return redirect()->back();
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
        //$tours = Tour::whereBetween('price', [$tour->price *0.9,$tour->price *1.1])->where('id',"!=",$tour->id)->get();
        $Prices = Tour::select('*')->where('id',"!=",$tour->id)->whereRaw("price*(100-sales)/100 between {$tour->price}*0.9 And {$tour->price}*1.1")->get();
        
        if($Prices->count()>=4)
            $tours=$tours->random(4); 

        $overview=Storage::disk('local')->get($tour->overview);
        $description=Storage::disk('local')->get($tour->description);

         return view('tourdetails', ['tour' => $tour, 'Prices' => $Prices, 
                     'overview'=>str_replace("\n",'<br>',$overview), 
                     'description'=>str_replace("\n",'<br>',$description)]);
    }
// str_replace("\n",'<br>',htmlentities($description))||str_replace("\n",'<br>',htmlentities($overview))
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tour = Tour::findOrFail( $id);
        
        $overview=Storage::disk('local')->get($tour->overview);
        $description=Storage::disk('local')->get($tour->description);

        $provinces=Province::all();
        return view('editTour')->with(['tour' => $tour, 
        'overview'=>str_replace("\n",'<br>',$overview), 
        'description'=>str_replace("\n",'<br>',$description),
        'provinces'=>$provinces]);
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
        $tour=Tour::where('id',$id);
        $tour->update([
            'title' => $request->title,
            'price' => $request->price,
            'duration' =>$request->duration,
            'departure_point' => $request->departure,
            'departure_date' =>$request->time,
            'sales' => $request->sale,
        ]);
        $temp=$tour->get()[0];

        Storage::disk('local')->put('overview/'.$temp->id.'.txt',$request->overview);
        Storage::disk('local')->put('description/'.$temp->id.'.txt',$request->description);
        
        if($request->hasFile('img')) 
            $tour->update([
                'img'=>'http://127.0.0.1:8000/storage/'.$request->file('img')->storeAs('tours/img', $temp->id.'.'.$request->file('img')->getClientOriginalExtension(), 'public'),
            ]);
        if($request->hasFile('img')) 
            $tour->update([
                'video'=>'http://127.0.0.1:8000/storage/'.$request->file('video')->storeAs('tours/video', $temp->id.'.'.$request->file('video')->getClientOriginalExtension(), 'public'),
            ]);
        return redirect(route('tourDetails',['id'=>$temp->id]));
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
        $provinces=Province::all();
        $tours=Tour::where('title','like', "%{$request->key}%");
        if($request->from)
            $tours->whereDate('departure_date','>=',$request->from);
        if($request->to)
            $tours->whereDate('departure_date','<=',$request->to);
        if($request->province)
            $tours->where('departure_point',$request->province);
        //dd($request);
        return view('tours',['tours'=> $tours->paginate(),'provinces'=>$provinces]);

    }

    public function book($id){
        $tour=Tour::where('id', $id)->get();

        return view('booking',['tour'=>$tour[0]]);
    }

    
}
