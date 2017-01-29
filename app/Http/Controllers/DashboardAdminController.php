<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductOrder;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function getdashboard(Request $request){
        $data=$request->get('data');
        $dateRes = explode('->', $data);
        //dd($data);
        $lineLabels = [];
        $lineDatas = [];
        $barLabels = [];
        $barDatas1= [];
        $barDatas2 =[];

        $idUser = Auth::user()->id;
        $orders = Order::whereBetween('updated_at', array(new DateTime($dateRes[0]), new DateTime($dateRes[1])))
            ->where('kho_id',$idUser)
            ->whereIn('status',[9,11])
            ->groupBy(DB::raw("DATE(updated_at)"))
            ->get();
        $i=0;
        foreach($orders as $key=>$order ){
            $barLabels[$i]=$order->updated_at->format('d-m-Y');
                $barDatas1[$i] = Order::getNumOrder(9,$order->updated_at->format('d-m-Y'));
                $barDatas2[$i] = Order::getNumOrder(11,$order->updated_at->format('d-m-Y'));

            $lineLabels[$i]=$order->updated_at->format('d-m-Y');
            $lineDatas[$i] = ProductOrder::getSumPrice($order->updated_at->format('d-m-Y'));
            $i++;

        }

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            'lineLabels' => $lineLabels,
            'lineDatas' => $lineDatas,
            'barLabels'=>$barLabels,
            'barDatas1'=>$barDatas1,
            'barDatas2'=>$barDatas2,

        );
        return \Response::json($response);

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
