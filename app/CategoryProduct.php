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
}
