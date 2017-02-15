<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    //protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level'];
    protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level','image','time_active','confirm_kho','quangcao','user_test','date_end_test'];
    public static function countLevelKho($level){
        $ware = WareHouse::where('level',$level)->get();
        return count($ware);
    }
    public static function getIdWareHouse($user_id){
        $ware = WareHouse::where('user_id',$user_id)->first();
        return $ware->id;

    }
}
