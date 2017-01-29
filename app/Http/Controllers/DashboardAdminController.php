<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductOrder;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function getdashboard(Request $request){
        $param1 = 7;
        $param2 = 7;
        $idUser = Auth::user()->id;
        $order = Order::whereBetween('updated_at', array(new DateTime('29-01-2017'), new DateTime('29-01-2017')))
            ->where('kho_id',0)
            ->get();

        dd($order);


        $orderProduct = ProductOrder::select('product_orders.id','orders.kho_id','product_orders.price_in','product_orders.price','product_orders.num')
            ->leftJoin('orders','product_orders.order_id','=','orders.id')
            ->where('orders.kho_id',$idUser)
            ->get();
        $totalPriceIn=0;
        $totalPrice=0;
        foreach($orderProduct as $itemOrder){
            $totalPrice = $itemOrder->num * $itemOrder->price;
            $totalPriceIn = $itemOrder->num * $itemOrder->price_in;

        }
        $faiseOrder =[];
        $successOrder = [];


//        $numOrder = count($order);
//        $profit =$totalPrice - $totalPriceIn;
//        $data=[
//            "numOrder"=>$numOrderArray,
//            "profit"=>$numProfitArray,
//        ];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = Auth::user()->id;
        $order = Order::where('kho_id',$idUser)->get();
        $numOrder = count($order);
        $orderProduct = ProductOrder::select('product_orders.id','orders.kho_id','product_orders.price_in','product_orders.price','product_orders.num')
            ->leftJoin('orders','product_orders.order_id','=','orders.id')
            ->where('orders.kho_id',$idUser)
            ->get();
//        dd($orderProduct);
        $totalPriceIn=0;
        $totalPrice=0;
        foreach($orderProduct as $itemOrder){
            $totalPrice = $itemOrder->num * $itemOrder->price;
            $totalPriceIn = $itemOrder->num * $itemOrder->price_in;

        }
        $profit =$totalPrice - $totalPriceIn;
        $numProduct = count($orderProduct);
        $data =[
            'numOrder' =>$numOrder,
            'totalPrice' =>$totalPrice,
            'profit' =>$profit,
            'numProduct' =>$numProduct,


        ];

        return view('admin.dashboard-admin',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
