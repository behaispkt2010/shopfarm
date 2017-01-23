<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index(){
        return view('frontend.product');

    }

    public function CateProduct(){
        return view('frontend.product');

    }
    public function SingleProduct(){
        return view('frontend.product-single');

    }
    public function checkOrder(){
        return view('frontend.category');

    }
}
