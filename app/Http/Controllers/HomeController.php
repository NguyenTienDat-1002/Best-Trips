<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class HomeController extends Controller
{
    //
    public function index(){
        return redirect(route('home'));
    }

    public function home() {
        
        return view('home');
    }

    public function about() {
        return view('about');
    }

}
