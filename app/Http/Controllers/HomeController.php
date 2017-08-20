<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProduct;
use App\Product;
use App\ProductOrder;
use App\Company;
use App\WareHouse;
use App\NewsCompany;
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
            //$cate= $request->get('search');
            // dd($cate);
            $product1 = Product::query();
            if(!empty($name)){
                $product1 =  $product1->where('title','LiKE','%'.$request->get('search').'%');
            }
            // if(!empty($cate)){
            //     $product2 =  $product1->where('category',$request->get('cateSearch'));
            // }
            
            $products = $product1->paginate(16);
            // dd($products);
                $data = [
                    "products" => $products,
                ];
            return view('frontend.product',$data);
        }

        $getBestStarsProduct = Product::getBestStarsProduct(9);
        $getBestSellerProduct = Product::getBestSellerProduct(10);
        $getNewProduct = Product::getNewProduct(10);
        $allCategory = CategoryProduct::where('parent',0)->get();

        $getAllNewsCompany = NewsCompany::select('users.*', 'company.*', 'news_company.*' , 'company.id as companyID' ,'news_company.id as newscompanyID')
            ->leftjoin('users','users.id','=','news_company.author_id')
            ->leftjoin('company','company.user_id','=','users.id')
            ->where('news_company.status',1)
            ->inRandomOrder()
            ->paginate(16);
        $getAllWareHouse = WareHouse::inRandomOrder()->paginate(16);

        /*$getVipByCate = WareHouse::getVipByCate(1,3);*/
        // dd($getAllNewsCompany);
        $data = [
            'getNewProduct' =>$getNewProduct,
            'bestSellerProduct'=>$getBestSellerProduct,
            'getBestStarsProduct'=>$getBestStarsProduct,
            'allCategory'=>$allCategory,
            'getAllNewsCompany'=>$getAllNewsCompany,
            'getAllWareHouse'=>$getAllWareHouse
        ];
        return view('frontend.home',$data);
    }
    public function testmap() {
        return view('frontend.test');
        return view('frontend.test1');
    }
}
