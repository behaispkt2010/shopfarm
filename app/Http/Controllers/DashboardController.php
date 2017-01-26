<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
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

        $totalOrderSuccess1 = 0;
        $totalOrderSuccess2 = 0;
        $totalOrderSuccess3 = 0;
        $totalOrderSuccess4 = 0;
        $totalOrderSuccess5 = 0;
        $totalOrderSuccess6 = 0;
        $totalOrderSuccess7 = 0;
        $totalOrderSuccess8 = 0;
        $totalOrderSuccess9 = 0;
        $totalOrderSuccess10 = 0;
        $totalOrderSuccess11 = 0;
        $totalOrderSuccess12 = 0;
        $totalOrderFail1 = 0;
        $totalOrderFail2 = 0;
        $totalOrderFail3 = 0;
        $totalOrderFail4 = 0;
        $totalOrderFail5 = 0;
        $totalOrderFail6 = 0;
        $totalOrderFail7 = 0;
        $totalOrderFail8 = 0;
        $totalOrderFail9 = 0;
        $totalOrderFail10 = 0;
        $totalOrderFail11 = 0;
        $totalOrderFail12 = 0;
        $arrProductID = [];
        foreach ($arrAllProductOrder as $ProductOrder){
            array_push($arrProductID,$ProductOrder->id_product);
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
        foreach ($arrAllOrder as $Order) {
            $TmpMonth = strtotime($Order->updated_at);

            $month = (date('m', $TmpMonth));
            $year = (date('Y', $TmpMonth));
            $yearReal = date('Y');
            if (($year == $yearReal) && $Order->status == '9'){
                switch ($month) {
                    case "01":
                        $totalOrderSuccess1++;
                        break;
                    case "02":
                        $totalOrderSuccess2++;
                        break;
                    case "03":
                        $totalOrderSuccess3++;
                        break;
                    case "04":
                        $totalOrderSuccess4++;
                        break;
                    case "05":
                        $totalOrderSuccess5++;
                        break;
                    case "06":
                        $totalOrderSuccess6++;
                        break;
                    case "07":
                        $totalOrderSuccess7++;
                        break;
                    case "08":
                        $totalOrderSuccess8++;
                        break;
                    case "09":
                        $totalOrderSuccess9++;
                        break;
                    case "10":
                        $totalOrderSuccess10++;
                        break;
                    case "11":
                        $totalOrderSuccess11++;
                        break;
                    case "12":
                        $totalOrderSuccess12++;
                        break;
                }
            }
            else if (($year == $yearReal) && $Order->status == '10'){
                switch ($month) {
                    case "01":
                        $totalOrderFail1++;
                        break;
                    case "02":
                        $totalOrderFail2++;
                        break;
                    case "03":
                        $totalOrderFail3++;
                        break;
                    case "04":
                        $totalOrderFail4++;
                        break;
                    case "05":
                        $totalOrderFail5++;
                        break;
                    case "06":
                        $totalOrderFail6++;
                        break;
                    case "07":
                        $totalOrderFail7++;
                        break;
                    case "08":
                        $totalOrderFail8++;
                        break;
                    case "09":
                        $totalOrderFail9++;
                        break;
                    case "10":
                        $totalOrderFail10++;
                        break;
                    case "11":
                        $totalOrderFail11++;
                        break;
                    case "12":
                        $totalOrderFail12++;
                        break;
                }
            }
        }

        $tmpID = array_count_values($arrProductID);
        arsort($tmpID);
        $arrTmpPID = [];
        $arrTmpCountOrder = [];
        foreach ($tmpID as $id=>$countid){
            array_push($arrTmpPID,$id);
            array_push($arrTmpCountOrder,$countid);
        }
        for($i=0;$i<count($arrTmpPID);$i++){
            $ProductDetailMax = Product::find($arrTmpPID[0]);
            $ProductDetailMax1 = Product::find($arrTmpPID[1]);
            $ProductDetailMax2 = Product::find($arrTmpPID[2]);
            $arrProductOrderMax = ProductOrder::where('id_product','=',($arrTmpPID[0]))->get();
            $arrProductOrderMax1 = ProductOrder::where('id_product','=',($arrTmpPID[1]))->get();
            $arrProductOrderMax2 = ProductOrder::where('id_product','=',($arrTmpPID[2]))->get();

        }
        for($i=0;$i<count($arrTmpCountOrder);$i++){
            $OrderMax = $arrTmpCountOrder[0];
            $OrderMax1 = $arrTmpCountOrder[1];
            $OrderMax2 = $arrTmpCountOrder[2];

        }
        $moneyOrderMax = 0;
        $moneyOrderMax1 = 0;
        $moneyOrderMax2 = 0;
        foreach ($arrProductOrderMax as $ProductOrderMax){
            $moneyOrderMax = $moneyOrderMax + $ProductOrderMax->price;
        }
        foreach ($arrProductOrderMax1 as $ProductOrderMax1){
            $moneyOrderMax1 = $moneyOrderMax1 + $ProductOrderMax1->price;
        }
        foreach ($arrProductOrderMax2 as $ProductOrderMax2){
            $moneyOrderMax2 = $moneyOrderMax2 + $ProductOrderMax2->price;
        }


        /*echo "<pre>";
        print_r($arrProductOrderMax);
        echo "</pre>";
        die;*/
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
            'totalPriceMonth12' => $totalPriceMonth12,

            'totalOrderSuccess1' => $totalOrderSuccess1,
            'totalOrderSuccess2' => $totalOrderSuccess2,
            'totalOrderSuccess3' => $totalOrderSuccess3,
            'totalOrderSuccess4' => $totalOrderSuccess4,
            'totalOrderSuccess5' => $totalOrderSuccess5,
            'totalOrderSuccess6' => $totalOrderSuccess6,
            'totalOrderSuccess7' => $totalOrderSuccess7,
            'totalOrderSuccess8' => $totalOrderSuccess8,
            'totalOrderSuccess9' => $totalOrderSuccess9,
            'totalOrderSuccess10' => $totalOrderSuccess10,
            'totalOrderSuccess11' => $totalOrderSuccess11,
            'totalOrderSuccess12' => $totalOrderSuccess12,

            'totalOrderFail1' => $totalOrderFail1,
            'totalOrderFail2' => $totalOrderFail2,
            'totalOrderFail3' => $totalOrderFail3,
            'totalOrderFail4' => $totalOrderFail4,
            'totalOrderFail5' => $totalOrderFail5,
            'totalOrderFail6' => $totalOrderFail6,
            'totalOrderFail7' => $totalOrderFail7,
            'totalOrderFail8' => $totalOrderFail8,
            'totalOrderFail9' => $totalOrderFail9,
            'totalOrderFail10' => $totalOrderFail10,
            'totalOrderFail11' => $totalOrderFail11,
            'totalOrderFail12' => $totalOrderFail12,

            'ProductDetailMax' => $ProductDetailMax,
            'ProductDetailMax1' => $ProductDetailMax1,
            'ProductDetailMax2' => $ProductDetailMax2,

            'OrderMax' => $OrderMax,
            'OrderMax1' => $OrderMax1,
            'OrderMax2' => $OrderMax2,

            'moneyOrderMax' => $moneyOrderMax,
            'moneyOrderMax1' => $moneyOrderMax1,
            'moneyOrderMax2' => $moneyOrderMax2
        ];
        return view('admin.dashboard',$data);
    }

}
