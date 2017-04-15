<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $res = $res+ $orderProduct->price;
        }
        return $res;

    }
    public static function getSumPriceProfit($date){
        $idUser = Auth::user()->id;

        $orderProducts = ProductOrder::select('product_orders.price','product_orders.price_in','product_orders.num','product_orders.updated_at')
            ->leftJoin('orders','product_orders.order_id','=','orders.id')
            ->where('orders.kho_id',$idUser)
            ->where(DB::raw("(DATE_FORMAT(product_orders.updated_at,'%d-%m-%Y'))"),$date)
            ->get();
        $res = 0;
        foreach($orderProducts as $orderProduct){
            $res = $res + ($orderProduct->price - $orderProduct->price_in);
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
                $sum = $sum + $item->price;
            }
        }
        return $sum;
    }
    public static function countOrderByStatus($id){
        $idUser = Auth::user()->id;
        if(Auth::user()->hasRole('kho')) {
            return Order::where('status', $id)
                ->where('kho_id',$idUser)
                ->count();
        }
        else {
            return Order::where('status', $id)->count();
        }
    }
}
