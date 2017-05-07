<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    //
    public function getHome()
    {
    	# code...
    	$latest = Product::orderBy('id','desc')->limit(4)->get();
	    $populars = Product::where('status','=','most popular')->limit(12)->get();
	    $products = Product::orderBy('id','desc')->get();
	    return view('home')->withProducts($products)->withPopulars( $populars )->withLatest($latest);
    }
}
