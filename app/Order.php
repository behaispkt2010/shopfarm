<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
