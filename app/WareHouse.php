<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    //protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level'];
    protected $fillable = ['user_id','name_company','address','province','mst','ndd','stk','level','image_kho','time_active','confirm_kho','quangcao','user_test','date_end_test','category_warehouse_id'];
    public static function countLevelKho($level){
        $ware = WareHouse::where('level',$level)->get();
        return count($ware);
    }
    public static function countStatusKho($status){
        $ware = WareHouse::where('user_test',$status)->get();
        return count($ware);
    }
    public static function getIdWareHouse($user_id){
        $ware = WareHouse::where('user_id',$user_id)->first();
        return $ware->id;
    }
    public static function checkUserTest($user_id){
        $user = User::leftjoin('ware_houses','users.id','=','ware_houses.user_id')
            ->where('users.id',$user_id)
            ->get();
        /*$check = $user->user_test;*/
        return $user;
    }
}
