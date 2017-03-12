<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Auth;
class ProductOrder extends Model
{
    protected $table = 'product_orders';
    protected $fillable = ['order_id','id_product','price_in','price','num'];

    public static function getSumPrice($date){
        $idUser = Auth::user()->id;

        $orderProducts = ProductOrder::select('product_orders.price','product_orders.num','product_orders.updated_at')
            ->leftJoin('orders','product_orders.order_id','=','orders.id')
            ->where('orders.kho_id',$idUser)
            ->where(DB::raw("(DATE_FORMAT(product_orders.updated_at,'%d-%m-%Y'))"),$date)
            ->get();
        $res = 0;
        foreach($orderProducts as $orderProduct){
            $res = $res+ $orderProduct->price * $orderProduct->num;
        }
        return $res;

    }
    public static function getSumPriceAdmin($date){
        $orderProducts = ProductOrder::select('product_orders.price','product_orders.num','product_orders.updated_at')
            ->leftJoin('orders','product_orders.order_id','=','orders.id')
            ->where(DB::raw("(DATE_FORMAT(product_orders.updated_at,'%d-%m-%Y'))"),$date)
            ->get();
        $res = 0;
        foreach($orderProducts as $orderProduct){
            $res = $res+ $orderProduct->price * $orderProduct->num;
        }
        return $res;

    }
    public static function getSumOrder($id){
        $sum = 0 ;
        $pd= ProductOrder::where('order_id',$id)->get();
        if(count($pd)!=0) {
            foreach ($pd as $item) {
                $sum = $sum + $item->price * $item->num;
            }
        }
        return $sum;
    }
    public static function countOrderByStatus($id){
        return Order::where('status',$id)->count();
    }
}
