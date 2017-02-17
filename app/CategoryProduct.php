<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $fillable = ['name', 'slug','note','parent'];
    public static function getNameCateById($id){
        $name = "Mặc định";
        $query=  CategoryProduct::find($id);
        if(!empty($query)){
            $name = $query->name;
        }
        return $name;
    }
    public static function getCate(){
        return CategoryProduct::get();

    }
    public static function getAllCategoryProduct(){
        return CategoryProduct::get();
    }
    public static function getSlugCategoryProduct($id){
        $slug = "mac-dinh";
        $query=  CategoryProduct::find($id);
        if(!empty($query)){
            $slug = $query->slug;
        }
        return $slug;
    }
    public static function getTonKho($id_cate=0,$id_kho=0){
        if($id_cate!=0 && $id_kho!=0){
            $product = Product::where('kho', $id_kho)
                ->where('category', $id_cate)
                ->groupBy('category')
                ->selectRaw('sum(inventory_num) as inventory_num, count(*) as numproduct')
                ->first();
        }
        else if($id_kho==0){
            $product = Product::
                where('category', $id_cate)
                ->groupBy('category')
                ->selectRaw('sum(inventory_num) as inventory_num, count(*) as numproduct')
                ->first();
        }
        else {
            $product = Product::where('kho', $id_kho)
                ->where('category', $id_cate)
                ->groupBy('category')
                ->selectRaw('sum(inventory_num) as inventory_num, count(*) as numproduct')
                ->first();
        }
//        dd($product);
        $inventory_num =0;
        $numproduct = 0;
        if(count($product)!=0){
            $inventory_num=$product->inventory_num;
            $numproduct = $product->numproduct;
        }
        $data = [
        'inventory_num'=>$inventory_num,
        'numproduct' => $numproduct
        ];

        return $data;
    }



}
