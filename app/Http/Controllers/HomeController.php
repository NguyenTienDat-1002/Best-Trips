<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    //
    public function index(){
        return redirect(route('home'));
    }

    public function home() {
        $lowest = Tour::orderByRaw('price*(100-sales)/100 ASC')->limit(8)->get();
        $bigSale = Tour::where('Sales','>',0)->orderByRaw('price*(sales/100) DESC')->limit(8)->get();
        return view('home')->with(['lowest'=>$lowest,'bigSale'=>$bigSale]);
    }

    public function about() {
        return view('about');
    }

}
