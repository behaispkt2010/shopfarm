<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\ProductOrder;
use App\User;
use App\WareHouse;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $data=$request->get('data');
        $dateRes = explode('->', $data);
        //dd($data);
        $lineLabels = [];
        $lineDatas = [];
        $barLabels = [];
        $barDatas1= [];
        $barDatas2 =[];

        $orders = Order::whereBetween('updated_at', array(new DateTime($dateRes[0]), new DateTime($dateRes[1])))
            ->whereIn('status',[9,11])
            ->groupBy(DB::raw("DATE(updated_at)"))
            ->get();
        $i=0;
        foreach($orders as $key=>$order ){
            $barLabels[$i]=$order->updated_at->format('d-m-Y');
            $barDatas1[$i] = Order::getNumOrderAdmin(9,$order->updated_at->format('d-m-Y'));
            $barDatas2[$i] = Order::getNumOrderAdmin(11,$order->updated_at->format('d-m-Y'));

            $lineLabels[$i]=$order->updated_at->format('d-m-Y');
            $lineDatas[$i] = ProductOrder::getSumPriceAdmin($order->updated_at->format('d-m-Y'));
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
        //dd($response);
        return \Response::json($response);

    }
    public function index(){
        //echo "admin";
        $level1 = WareHouse::countLevelKho(1);
        $level2 = WareHouse::countLevelKho(2);
        $level3 = WareHouse::countLevelKho(3);
        $dungthu = WareHouse::countStatusKho(2);
        $traphi = WareHouse::countStatusKho(1);
        $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
            ->where('role_user.role_id',3)
            ->orderBy('id','DESC')
            ->get();
        $customer = count($users);
        $arrAllOrder = Order::get();
        $countOrder = count($arrAllOrder);
        $arrAllProductOrder = ProductOrder::get();
        $totalPriceIn=0;
        $totalPrice=0;
        /*echo "<pre>";
        print_r($arrAllProductOrder);
        echo "</pre>";
        die;*/
        foreach($arrAllProductOrder as $itemOrder){
            $totalPrice = $totalPrice + ($itemOrder->num * $itemOrder->price);
            $totalPriceIn = $totalPriceIn + ($itemOrder->num * $itemOrder->price_in);
        }
        $arrBestSellProduct = Product::getBestSellerProduct(3);
        $arrProductWaitApproval = Product::where('status',0)->orderBy('id','DESC')->paginate(6);
        //dd($arrProductWaitApproval);
        $data =[
            'countOrder' =>$countOrder,
            'arrBestSellProduct' =>$arrBestSellProduct,
            'customer' =>$customer,
            'level1' =>$level1,
            'level2' =>$level2,
            'level3' =>$level3,
            'dungthu' =>$dungthu,
            'traphi' =>$traphi,
            'arrProductWaitApproval' =>$arrProductWaitApproval,
            'totalPrice' =>$totalPrice
        ];

        return view('admin.dashboard',$data);
    }
    /*public function index()
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
    }*/

}
