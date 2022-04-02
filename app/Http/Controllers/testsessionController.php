<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class testsessionController extends Controller
{
    //
    public function test($id){
        session()->put('data',$id);
        return session()->get('data');
    }

    public function result(Request $request){
        if($request->session()->has('data'))
            return $request->session()->get('data');
        else
            return $request->session()->get('data');
    }

    
}
