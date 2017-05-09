<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    //protected $fillable = ['user_id','name_company','address','mst','ndd','stk','level'];
    protected $fillable = ['user_id','name_company','address','province','fanpage_fb','mst','ndd','stk','level','time_upgrade_level','time_upgrade_bonus','image_kho','time_active','confirm_kho','quangcao','time_confirm_kho','time_confirm_kho_bonus','time_quangcao','time_quangcao_bonus','user_test','date_end_test','category_warehouse_id'];
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
    public static function getVipByCate($cateID,$limit=0){
        $getCate = CategoryProduct::where('parent',$cateID)->get();
        $arrCateProductID = array();
        foreach ($getCate as $itemgetCate) {
            if (!in_array($itemgetCate['id'], $arrCateProductID)){
                $arrCateProductID[] = $itemgetCate['id'];
            }
        }
        // dd($arrCateProductID);
        if($limit==0) {
            $arrGetVipByCate = WareHouse::leftJoin('products','ware_houses.user_id','products.kho')
                ->whereIn('products.category',$arrCateProductID)
                ->where('ware_houses.level','=',3)
                ->groupBy('ware_houses.id')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho, ware_houses.image_kho as imageKho')
                ->get();
        }
        else{
            $arrGetVipByCate = WareHouse::leftJoin('products','ware_houses.user_id','products.kho')
                ->whereIn('products.category',$arrCateProductID)
                ->where('ware_houses.level','=',3)
                ->groupBy('ware_houses.id')
                ->selectRaw('ware_houses.id as idKho,ware_houses.name_company as nameKho, ware_houses.level as levelKho, ware_houses.image_kho as imageKho')
                ->take($limit)
                ->get();
        }
        return $arrGetVipByCate;
    }
}
