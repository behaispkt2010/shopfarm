<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level'];
    public static function countLevelKho($level){
        $ware = WareHouse::where('level',$level)->get();
        return count($ware);
    }
    public static function getIdWareHouse($user_id){
        $ware = WareHouse::where('user_id',$user_id)->first();
        return $ware->id;

    }
}
