<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class BookController extends Controller
{
    //
    public function create($id){
        $tour=Tour::where('id', $id)->get();

        return view('booking',['tour'=>$tour[0]]);
    }

    public function preparePayment(Request $request,$id){
        $tour=Tour::findOrFail($id);
        $phone=$request->phone;
        $email=$request->email;
        $adults=$request->adults;
        $children=$request->children;
        $address=$request->address;
        $price=$adults*($tour->price*((100-$tour->sale)/100))+
                $children*($tour->price*((100-$tour->sale-20)/100));
        return view('payment',['tour_id'=>$tour->id,'phone'=>$phone,
                                'email'=>$email,'adults'=>$adults,
                                'children'=>$children,'address'=>$address,
                                'price'=>$price]);
    }
}
