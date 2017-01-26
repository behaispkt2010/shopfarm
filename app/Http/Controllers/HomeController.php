<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(9)->orderBy('updated_at','DESC')->get();
         $count = count($products);
        $data = [
            'products' =>$products,
            'count'=>$count,
        ];
        return view('frontend.home',$data);
    }
}
