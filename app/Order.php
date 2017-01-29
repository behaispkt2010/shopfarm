<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['time_order','status','customer_id','note','status_pay','type_pay','received_pay','remain_pay','type_driver','name_driver','phone_driver','number_license_driver','author_id'];
    public  static function getKhoProduct($id){
        $product = Product::select('kho')->where('id',$id)->first();
        return $product->kho;
    }
    public static function checkKhoByIdProduct($ArrayId){
        $tmpKho = Order::getKhoProduct($ArrayId[0]);

        foreach($ArrayId as $id){
            $kho = Order::getKhoProduct($id);

            if($kho != $tmpKho ){
//                dd($kho);
                return -1;
            }
            else{
                $tmpKho= $kho;

            }
        }
        return $tmpKho;
    }
    public static function getNumOrder($status,$date){
        $idUser = Auth::user()->id;

        $orders = Order::where('kho_id',$idUser)
            ->where('status',$status)
            ->where(DB::raw("(DATE_FORMAT(updated_at,'%d-%m-%Y'))"),$date)
            ->get();
        return count($orders);

        }
}
