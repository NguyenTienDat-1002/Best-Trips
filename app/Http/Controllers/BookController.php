<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

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

        $price=$adults*($tour->price*(100-$tour->sales)/100)+
            $children*($tour->price*((100-$tour->sales-20)/100));

        return view('payment',['tour'=>$tour->id,'phone'=>$phone,'price'=>$price,
                                'email'=>$email, 'adults'=>$adults,
                                'children'=>$children, 'address'=>$address]);
    }
    
    public function payment(Request $request){
        $record=Booking::create([
            "tour_id"=>$request->tour_id,
            "user_id"=>Auth::user()->id,
            "email"=>$request->email,
            "adults"=>$request->adults,
            "children"=>$request->children,
            "phone"=>$request->phone,
            "address"=>$request->address,
        ]);
        return view();
    }
}
