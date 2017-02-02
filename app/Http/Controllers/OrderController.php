<?php

namespace App\Http\Controllers;

use App\District;
use App\HistoryUpdateStatusOrder;
use App\Order;
use App\OrderStatus;
use App\Product;
use App\ProductOrder;
use App\Province;
use App\User;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOrderByStatus($id){
        $arrTmpAllOrders = Order::orderBy('id', 'DESC')->get();
        $arrAllOrders = array();
        foreach ($arrTmpAllOrders as $arrOrder) {
            $arrAllOrders[$arrOrder['id']] = $arrOrder;
        }


        $arrTmpAllUser = User::get();
        $arrAllUser = array();
        foreach ($arrTmpAllUser as $arrUser) {
            $arrAllUser[$arrUser['id']] = $arrUser;
        }
        $arrTmpOrders = Order::where('status','=',$id)->get();

        $arrTmpProductOrders = ProductOrder::get();
        $arrAllOrders = array();
        /*$arrProductOrders = ProductOrder::where('order_id','=',$id)->get();*/

        foreach ($arrTmpOrders as $arrOrder) {
            $arrAllOrders[$arrOrder['id']] = $arrOrder;
        }

        $arrAllProductOrder = array();
        foreach ($arrTmpProductOrders as $arrOrders) {
            $arrAllProductOrder[$arrOrders['order_id']] = $arrOrders;
        }
        $arrOrderByStatus = OrderStatus::get();
        $arrCountOrderByStatus = [];
        foreach($arrOrderByStatus as $OrderStatus){
            $countOrderByStatus = Order::getNumOrderByStatus($OrderStatus->id);
            array_push($arrCountOrderByStatus,$countOrderByStatus);
        }
        $arrCountOrderByStatus['all'] = count(Order::orderBy('id', 'DESC')->get());
        $arrCountOrderByStatus['new'] = count(Order::where('status',0)->get());
        $data = [
            'arrAllOrders' => $arrAllOrders,
            'arrAllProductOrder' => $arrAllProductOrder,
            'arrTmpProductOrders' => $arrTmpProductOrders,
            'arrCountOrderByStatus' => $arrCountOrderByStatus,
            'arrAllUser' => $arrAllUser
        ];

        return view('admin.orders.index',$data);
    }
    public function index(Request $request)
    {
        if($request->get('q')){
            $q = $request->get('q');
            $arrTmpAllUser = User::leftjoin('orders','users.id','=','orders.customer_id')
                ->where('name','LIKE','%'.$q.'%')
                ->orwhere('phone_number','LIKE','%'.$q.'%')
                ->get();
            $arrAllUser = array();
            $arrAllOrders = array();
            foreach ($arrTmpAllUser as $arrUser) {
                //echo $arrUser->customer_id;
                $arrAllUser[$arrUser['customer_id']] = $arrUser;
                $arrTmpOrders = Order::where('customer_id', '=', $arrUser->customer_id)->get();
                foreach ($arrTmpOrders as $arrOrder) {
                    $arrAllOrders[$arrOrder['id']] = $arrOrder;
                }
            }

            $arrTmpProductOrders = ProductOrder::get();

            /*$arrProductOrders = ProductOrder::where('order_id','=',$id)->get();*/

            /*echo "<pre>";
            print_r($arrTmpAllUser);
            echo "</pre>";
            die;*/
            $arrAllProductOrder = array();
            foreach ($arrTmpProductOrders as $arrOrders) {
                $arrAllProductOrder[$arrOrders['order_id']] = $arrOrders;
            }

        }
        else {
            $arrTmpAllUser = User::get();
            $arrAllUser = array();
            foreach ($arrTmpAllUser as $arrUser) {
                $arrAllUser[$arrUser['id']] = $arrUser;
            }
            $arrTmpOrders = Order::orderBy('id', 'DESC')->get();
            $arrTmpProductOrders = ProductOrder::get();
            $arrAllOrders = array();
            foreach ($arrTmpOrders as $arrOrder) {
                $arrAllOrders[$arrOrder['id']] = $arrOrder;
            }

            $arrAllProductOrder = array();
            foreach ($arrTmpProductOrders as $arrOrders) {
                $arrAllProductOrder[$arrOrders['order_id']] = $arrOrders;
            }

        }
        $countAllOrder = count($arrAllOrders);
        $countOrderNew = count(Order::where('status',0)->get());
        $arrOrderByStatus = OrderStatus::get();
        $arrCountOrderByStatus = [];
        foreach($arrOrderByStatus as $OrderStatus){
            $countOrderByStatus = Order::getNumOrderByStatus($OrderStatus->id);
            array_push($arrCountOrderByStatus,$countOrderByStatus);
        }
        //array_push($arrCountOrderByStatus,$countAllOrder,$countOrderNew);
        $arrCountOrderByStatus['all'] = $countAllOrder;
        $arrCountOrderByStatus['new'] = $countOrderNew;
        $data = [
            'arrAllOrders' => $arrAllOrders,
            'arrAllProductOrder' => $arrAllProductOrder,
            'arrTmpProductOrders' => $arrTmpProductOrders,
            'arrCountOrderByStatus' => $arrCountOrderByStatus,
            'arrAllUser' => $arrAllUser
        ];
        /*echo "<pre>";
        print_r($arrCountOrderByStatus);
        echo "</pre>";
        die;*/
        return view('admin.orders.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = User::leftjoin('role_user','role_user.user_id','=','users.id')
            ->where('role_user.role_id',3)
            ->orderBy('id','DESC')
            ->get();
        $province = Province::get();
        $district = District::get();
        $products = Product::get();
        $order_status = OrderStatus::get();
        $data=[
            'customer' =>$customer,
            'province' =>$province,
            'district' =>$district,
            'products' =>$products,
            'order_status' => $order_status
        ];
//        dd($order_status);
        return view('admin.orders.edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $arrProductID = $request->product_id;
            $arrNumberProduct = $request->product_number;
            $arrPriceTotal = $request->pricetotal;

            $order = new Order();

            $kho_id = Order::checkKhoByIdProduct($arrProductID);
            if($kho_id == -1){
                return redirect('admin/orders/create/')->with(['flash_level' => 'danger', 'flash_message' => 'Các sản phẩm trong đơn hàng không cùng kho']);
            }
            else {
                $order->kho_id = $kho_id;
            }

            $order->time_order = $request->time_order;
            $order->status = $request->status;
            $order->customer_id = $request->customer_id;
            $order->note = $request->note;
            $order->type_driver = $request->type_driver;
            $order->name_driver = $request->name_driver;
            $order->phone_driver = $request->phone_driver;
            $order->number_license_driver = $request->number_license_driver;
            $order->type_pay = $request->type_pay;
            $order->received_pay = $request->received_pay;
            $order->remain_pay = $request->remain_pay;
            $order->author_id = Auth::user()->id;
            $order->save();
            $strOrderID = $order->id;
            // insert history
            $historyUpdateStatusOrder = new HistoryUpdateStatusOrder();
            $historyUpdateStatusOrder->order_id = $strOrderID;
            $historyUpdateStatusOrder->status = $request->status;
            $historyUpdateStatusOrder->author_id = Auth::user()->id;
            $historyUpdateStatusOrder->save();


//            $ProductOrder = [];
//
//            foreach ($arrProductID as $index => $ProductID) {
//                $ProductOrder[$index]['id_product'] = $ProductID;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//                $ProductOrder[$index]['created_at'] = new DateTime();
//                $ProductOrder[$index]['updated_at'] = new DateTime();
//            }
//            foreach ($arrPriceTotal as $index => $PriceTotal) {
//                $ProductOrder[$index]['price'] = $PriceTotal;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//                $ProductOrder[$index]['created_at'] = new DateTime();
//                $ProductOrder[$index]['updated_at'] = new DateTime();
//            }
//            foreach ($arrNumberProduct as $index => $NumberProduct) {
//                $ProductOrder[$index]['num'] = $NumberProduct;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//                $ProductOrder[$index]['created_at'] = new DateTime();
//                $ProductOrder[$index]['updated_at'] = new DateTime();
//
//            }


            foreach ($arrProductID as $key=>$ProductID) {
                $ProductOrder1 = new ProductOrder();
                $productInfo = Product::find($ProductID);
                $ProductOrder1['id_product'] = $ProductID;
                $ProductOrder1['order_id'] = $strOrderID;
                $ProductOrder1['price_in'] = $productInfo->price_in;
                $ProductOrder1['price'] = $productInfo->price_out;
                $ProductOrder1['num'] = $arrNumberProduct[$key];
                $ProductOrder1['name'] = $productInfo->title;
                $ProductOrder1->save();
            }

//            DB::table('product_orders')->insert($ProductOrder);
        }
        catch(\Exception $e){

            DB::rollback();
            return redirect('admin/orders/')->with(['flash_level' => 'danger', 'flash_message' => 'Lưu không thành công']);

        }

            DB::commit();
            return redirect('admin/orders/')->with(['flash_level' => 'success', 'flash_message' => 'Lưu thành công']);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arrAllProductOrder = array();
        $customer = User::leftjoin('role_user','role_user.user_id','=','users.id')
            ->where('role_user.role_id',3)
            ->orderBy('id','DESC')
            ->get();
        $arrOrder = Order::find($id);
        $province = Province::get();
        $district = District::get();
        $arrTmpProductsOrder = Product::get();
        foreach($arrTmpProductsOrder as $arrProduct){
            $arrAllProductOrder[$arrProduct['id']] = $arrProduct;
        }
        $order_status = OrderStatus::get();
        $arrCustomerOrder = User::find($arrOrder->customer_id);
        $arrProductOrders = ProductOrder::where('order_id','=',$id)->get();
        $arrHistoryStatusOrders = HistoryUpdateStatusOrder::where('order_id','=',$id)->get();
        /*echo "<pre>";
        print_r($arrHistoryStatusOrders);
        echo "</pre>";
        die;*/
        $data=[
            'customer' =>$customer,
            'province' =>$province,
            'district' =>$district,
            'products' =>$arrAllProductOrder,
            'order_status' => $order_status,
            'arrOrder' => $arrOrder,
            'arrCustomerOrder' => $arrCustomerOrder,
            'arrProductOrders' => $arrProductOrders,
            'arrHistoryStatusOrders' => $arrHistoryStatusOrders,
            'id' => $id
        ];
        return view('admin.orders.showorder',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arrAllProductOrder = array();
        $customer = User::leftjoin('role_user','role_user.user_id','=','users.id')
            ->where('role_user.role_id',3)
            ->orderBy('id','DESC')
            ->get();
        $arrOrder = Order::find($id);
        $province = Province::get();
        $district = District::get();
        $arrTmpProductsOrder = Product::get();
        foreach($arrTmpProductsOrder as $arrProduct){
            $arrAllProductOrder[$arrProduct['id']] = $arrProduct;
        }
        $order_status = OrderStatus::get();
        $arrCustomerOrder = User::find($arrOrder->customer_id);
        $arrProductOrders = ProductOrder::where('order_id','=',$id)->get();
        /*echo "<pre>";
        print_r($arrOrder);
        echo "</pre>";
        die;*/
        $data=[
            'customer' =>$customer,
            'province' =>$province,
            'district' =>$district,
            'products' =>$arrAllProductOrder,
            'order_status' => $order_status,
            'arrOrder' => $arrOrder,
            'arrCustomerOrder' => $arrCustomerOrder,
            'arrProductOrders' => $arrProductOrders,
            'id' => $id
        ];
        return view('admin.orders.edit',$data);
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
        DB::beginTransaction();
        try {
            $arrProductID = $request->product_id;
            $arrNumberProduct = $request->product_number;
            $arrPriceTotal = $request->pricetotal;
            $order = Order::find($id);
            $kho_id = Order::checkKhoByIdProduct($arrProductID);
//            dd($kho_id);

            if($kho_id == -1){
                return redirect("admin/orders/$id/edit/")->with(['flash_level' => 'danger', 'flash_message' => 'Các sản phẩm trong đơn hàng không cùng kho']);
            }
            else {
                $order->kho_id = $kho_id;
            }
            $data['time_order'] = $request->time_order;
            $data['status'] = $request->status;
            $data['customer_id'] = $request->customer_id;
            $data['note'] = $request->note;
            $data['type_driver'] = $request->type_driver;
            $data['name_driver'] = $request->name_driver;
            $data['phone_driver'] = $request->phone_driver;
            $data['number_license_driver'] = $request->number_license_driver;
            $data['type_pay'] = $request->type_pay;
            $data['received_pay'] = $request->received_pay;
            $data['remain_pay'] = $request->remain_pay;
            $data['author_id'] = Auth::user()->id;
            $order->update($data);
            if (!empty($id)) {
                DB::table('product_orders')->where('order_id', '=', $id)->delete();
            }
            $strOrderID = $id;
            // insert history
            $historyUpdateStatusOrder = new HistoryUpdateStatusOrder();
            $historyUpdateStatusOrder->order_id = $strOrderID;
            $historyUpdateStatusOrder->status = $request->status;
            $historyUpdateStatusOrder->author_id = Auth::user()->id;
            $historyUpdateStatusOrder->save();




//            $ProductOrder = [];
//
//            foreach ($arrProductID as $index => $ProductID) {
//                $ProductOrder[$index]['id_product'] = $ProductID;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//            }
//            foreach ($arrPriceTotal as $index => $PriceTotal) {
//                $ProductOrder[$index]['price'] = $PriceTotal;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//            }
//            foreach ($arrNumberProduct as $index => $NumberProduct) {
//                $ProductOrder[$index]['num'] = $NumberProduct;
//                $ProductOrder[$index]['order_id'] = $strOrderID;
//            }
            foreach ($arrProductID as $key=>$ProductID) {
                $ProductOrder1 = new ProductOrder();
                $productInfo = Product::find($ProductID);
                $ProductOrder1['id_product'] = $ProductID;
                $ProductOrder1['order_id'] = $strOrderID;
                $ProductOrder1['price_in'] = $productInfo->price_in;
                $ProductOrder1['price'] = $productInfo->price_out;
                $ProductOrder1['num'] = $arrNumberProduct[$key];
                $ProductOrder1['name'] = $productInfo->title;
                $ProductOrder1->save();
            }
//            DB::table('product_orders')->insert($ProductOrder);
        }
        catch(\Exception $e){

                DB::rollback();
                return redirect('admin/orders/')->with(['flash_level' => 'danger', 'flash_message' => 'Lưu không thành công']);

            }

            DB::commit();
        return redirect('admin/orders/')->with(['flash_level' => 'success', 'flash_message' => 'Lưu thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order =  Order::destroy($id);
        $product_order = ProductOrder::where('order_id','=',$id);
        $product_order->delete();
        if((!empty($order)) && (!empty($product_order))) {
            return redirect('admin/orders/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{
            return redirect('admin/orders/')->with(['flash_level' => 'success', 'flash_message' => 'Không thể xóa thể xóa']);

        }
    }
}
