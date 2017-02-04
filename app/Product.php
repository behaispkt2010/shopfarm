<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','code','price_in', 'price_out','gram','min_gram','inventory','inventory_num','kho','title_seo', 'slug', 'category','content','description','image','author_id','status'];
    public static function getNameById($id){
        $name = "không tìm thấy";
        $query=  Product::find($id);
        if(!empty($query)){
            $name = $query->title;
        }
        return $name;
    }
//    public static function getHotProduct(){
//        $hotProducts = Product::get();
//    }
    public static function getNewProduct(){
        $newProducts = Product::orderBy('id',"DESC")->take(4)->get();
        return $newProducts;

    }
    public static function getBestSellerProduct($limit=0){
        if($limit==0) {
            $bestSellerProduct = ProductOrder::leftJoin('products', 'product_orders.id_product', '=', 'products.id')
                ->groupBy('product_orders.id_product')
                ->selectRaw('products.*, sum(product_orders.num) as numOrder')
                ->selectRaw('products.*, sum(product_orders.price) as priceProduct')
                ->orderBy('numOrder', 'DESC')
                ->get();
        }
        else{
            $bestSellerProduct = ProductOrder::leftJoin('products', 'product_orders.id_product', '=', 'products.id')
                ->groupBy('product_orders.id_product')
                ->selectRaw('products.*, sum(product_orders.num) as numOrder')
                ->selectRaw('products.*, sum(product_orders.price) as priceProduct')
                ->orderBy('numOrder', 'DESC')
                ->take($limit)
                ->get();
        }
        return $bestSellerProduct;
    }
    public static function getRelatedProduct($id,$limit){

      $getCategory=Product::find($id);
//        dd($getCategory);

        if($limit==0) {
            $getRelatedProduct = Product::where('category', $getCategory->category)
                ->whereNotIn('id', [$id])
                ->inRandomOrder()
                ->get();
        }
        else{
            $getRelatedProduct = Product::where('category', $getCategory->category)
                ->whereNotIn('id', [$id])
                ->inRandomOrder()
                ->take($limit)
                ->get();
        }
        return $getRelatedProduct;
    }

    public static function getBestStarsProduct($limit=0){
        if($limit==0) {
            $bestSellerProduct = Rate::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->groupBy('rates.product_id')
                ->selectRaw('products.*, sum(rates.rate) as numRate')
                ->orderBy('numRate', 'DESC')
                ->get();
        }
        else{
            $bestSellerProduct = Rate::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->groupBy('rates.product_id')
                ->selectRaw('products.*, sum(rates.rate) as numRate')
                ->orderBy('numRate', 'DESC')
                ->take($limit)
                ->get();
        }
        return $bestSellerProduct;
    }
    public static function getLevelKhoProduct($level,$limit=0){
        if($limit==0) {
            $getLevelKhoProduct = Product::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->where('level', '>=', $level)
                ->get();
        }
        else{
            $getLevelKhoProduct = Product::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->where('level', '>=', $level)
                ->take($limit)
                ->get();
        }

        return $getLevelKhoProduct;
    }

}
