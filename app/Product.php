<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','price_in', 'price_out','gram','min_gram','inventory','inventory_num','kho','title_seo', 'slug', 'category','content','description','image','author_id','status'];
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
        $newProducts = Product::leftjoin('ware_houses','ware_houses.user_id','products.kho')
            ->leftjoin('users','users.id','ware_houses.user_id')
            ->selectRaw('products.*')
            ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
            ->orderBy('products.id',"DESC")->take(8)->get();
        return $newProducts;

    }
    public static function getBestSellerProduct($limit=0){
        if($limit==0) {
            $bestSellerProduct = ProductOrder::leftJoin('products', 'product_orders.id_product', '=', 'products.id')
                ->leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->groupBy('product_orders.id_product')
                ->selectRaw('products.*, sum(product_orders.num) as numOrder')
                ->selectRaw('products.*, sum(product_orders.price) as priceProduct')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->orderBy('numOrder', 'DESC')
                ->get();
        }
        else{
            $bestSellerProduct = ProductOrder::leftJoin('products', 'product_orders.id_product', '=', 'products.id')
                ->leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->groupBy('product_orders.id_product')
                ->selectRaw('products.*, sum(product_orders.num) as numOrder')
                ->selectRaw('products.*, sum(product_orders.price) as priceProduct')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
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
            $getRelatedProduct = Product::leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->where('products.category', $getCategory->category)
                ->whereNotIn('products.id', [$id])
                ->inRandomOrder()
                ->get();
        }
        else{
            $getRelatedProduct = Product::leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->where('products.category', $getCategory->category)
                ->whereNotIn('products.id', [$id])
                ->inRandomOrder()
                ->take($limit)
                ->get();
        }
        return $getRelatedProduct;
    }

    public static function getBestStarsProduct($limit=0){
        if($limit==0) {
            $bestSellerProduct = Rate::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->groupBy('rates.product_id')
                ->selectRaw('products.*, sum(rates.rate) as numRate')
                ->orderBy('numRate', 'DESC')
                ->get();
        }
        else{
            $bestSellerProduct = Rate::leftJoin('products', 'rates.product_id', '=', 'products.id')
                ->leftjoin('ware_houses','ware_houses.user_id','products.kho')
                ->leftjoin('users','users.id','ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
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
    public static function getProductByKhoVIP($limit=0){
        if($limit==0) {
            $getProductByKhoVIP = Product::leftjoin('ware_houses', 'ware_houses.user_id', 'products.kho')
                ->leftjoin('users', 'users.id', 'ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->where('ware_houses.level', 3)
                ->get();
        }
        else{
            $getProductByKhoVIP = Product::leftjoin('ware_houses', 'ware_houses.user_id', 'products.kho')
                ->leftjoin('users', 'users.id', 'ware_houses.user_id')
                ->selectRaw('products.*')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho')
                ->where('ware_houses.level', 3)
                ->take($limit)
                ->get();
        }
        return $getProductByKhoVIP;
    }
}
