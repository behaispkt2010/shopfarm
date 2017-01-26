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
    public static function getBestSellerProduct(){
        $bestSellerProduct = ProductOrder::leftJoin('products','product_orders.id_product','=','products.id')
            ->groupBy('product_orders.id_product')
            ->selectRaw('products.*, sum(product_orders.num) as numOrder')
            ->orderBy('numOrder','DESC')
            ->take(4)
            ->get();
        return $bestSellerProduct;
    }
    public static function getRelatedProduct($id){
        Product::take(4)->get();
    }
    public static function getTopOrderProduct(){

    }
    public static function getBestCommentProduct(){

    }
    public static function getLevelKhoProduct($level){

    }

}
