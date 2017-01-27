<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index(){
        $products = Product::paginate(16);
        $data =[
          "products"=>$products,
        ];
        return view('frontend.product',$data);

    }

    public function CateProduct(){
        return view('frontend.product');

    }
    public function SingleProduct($cate,$slug){
        $product=Product::where('slug',$slug)->first();
        $data=[
            "product"=>$product
        ];

        return view('frontend.product-single',$data);

    }
    public function checkOrder(){
        return view('frontend.check-order');

    }
}
