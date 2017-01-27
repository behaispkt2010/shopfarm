<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $fillable = ['name', 'slug','note','parent'];
    public static function getNameCateById($id){
        $name = "mặc định";
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



}
