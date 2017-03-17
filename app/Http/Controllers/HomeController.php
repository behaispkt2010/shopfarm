<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductOrder;
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
    public function index(Request $request)
    {
        if (!empty($request->get('search'))){
            $name = $request->get('search');
            $cate= $request->get('search');
            $product1 = Product::query();
            if(!empty($name)){
                $product1 =  $product1->where('title','LiKE','%'.$request->get('search').'%');
            }
            if(!empty($cate)){
                $product1 =  $product1->where('category',$request->get('cateSearch'));
            }
            $products = $product1->paginate(16);
                $data = [
                    "products" => $products,
                ];
            return view('frontend.product',$data);
            }

        $getBestStarsProduct = Product::getBestStarsProduct(9);
        $getBestSellerProduct = Product::getBestSellerProduct(9);
        $getNewProduct = Product::getNewProduct(9);
        //dd($getNewProduct);

        $data = [
            'getNewProduct' =>$getNewProduct,
            'bestSellerProduct'=>$getBestSellerProduct,
            'getBestStarsProduct'=>$getBestStarsProduct
        ];
        return view('frontend.home',$data);
    }
}
