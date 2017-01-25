<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductOrder;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $arrAllOrder = Order::get();
        $countOrder = count($arrAllOrder);
        $arrAllProductOrder = ProductOrder::get();
        $totalPrice = 0;
        $totalPriceMonth1 = 0;
        $totalPriceMonth2 = 0;
        $totalPriceMonth3 = 0;
        $totalPriceMonth4 = 0;
        $totalPriceMonth5 = 0;
        $totalPriceMonth6 = 0;
        $totalPriceMonth7 = 0;
        $totalPriceMonth8 = 0;
        $totalPriceMonth9 = 0;
        $totalPriceMonth10 = 0;
        $totalPriceMonth11 = 0;
        $totalPriceMonth12 = 0;
        $arrPriceByMonth = [];
        foreach ($arrAllProductOrder as $ProductOrder){
            $totalPrice = $totalPrice + $ProductOrder->price;
            $TmpMonth = strtotime($ProductOrder->created_at);
            $month = (date('m',$TmpMonth));
            $year = (date('Y',$TmpMonth));
            $yearReal = date('Y');
            if($year == $yearReal) {
                switch ($month) {
                    case "01":
                        $totalPriceMonth1 = $totalPriceMonth1 + $ProductOrder->price;
                        break;
                    case "02":
                        $totalPriceMonth2 = $totalPriceMonth2 + $ProductOrder->price;
                        break;
                    case "03":
                        $totalPriceMonth3 = $totalPriceMonth3 + $ProductOrder->price;
                        break;
                    case "04":
                        $totalPriceMonth4 = $totalPriceMonth4 + $ProductOrder->price;
                        break;
                    case "05":
                        $totalPriceMonth5 = $totalPriceMonth5 + $ProductOrder->price;
                        break;
                    case "06":
                        $totalPriceMonth6 = $totalPriceMonth6 + $ProductOrder->price;
                        break;
                    case "07":
                        $totalPriceMonth7 = $totalPriceMonth7 + $ProductOrder->price;
                        break;
                    case "08":
                        $totalPriceMonth8 = $totalPriceMonth8 + $ProductOrder->price;
                        break;
                    case "09":
                        $totalPriceMonth9 = $totalPriceMonth9 + $ProductOrder->price;
                        break;
                    case "10":
                        $totalPriceMonth10 = $totalPriceMonth10 + $ProductOrder->price;
                        break;
                    case "11":
                        $totalPriceMonth11 = $totalPriceMonth11 + $ProductOrder->price;
                        break;
                    case "12":
                        $totalPriceMonth12 = $totalPriceMonth12 + $ProductOrder->price;
                        break;
                }
            }
        }

        $data = [
            'totalPrice' => $totalPrice,
            'countOrder' => $countOrder,
            'totalPriceMonth1' => $totalPriceMonth1,
            'totalPriceMonth2' => $totalPriceMonth2,
            'totalPriceMonth3' => $totalPriceMonth3,
            'totalPriceMonth4' => $totalPriceMonth4,
            'totalPriceMonth5' => $totalPriceMonth5,
            'totalPriceMonth6' => $totalPriceMonth6,
            'totalPriceMonth7' => $totalPriceMonth7,
            'totalPriceMonth8' => $totalPriceMonth8,
            'totalPriceMonth9' => $totalPriceMonth9,
            'totalPriceMonth10' => $totalPriceMonth10,
            'totalPriceMonth11' => $totalPriceMonth11,
            'totalPriceMonth12' => $totalPriceMonth12
        ];
        return view('admin.dashboard',$data);
    }

}
