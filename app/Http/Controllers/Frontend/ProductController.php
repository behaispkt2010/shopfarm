<?php

namespace App\Http\Controllers\Frontend;

use App\CategoryProduct;
use App\DetailImageProduct;
use App\Mail\OrderInfo;
use App\Order;
use App\OrderStatus;
use App\Product;
use App\ProductOrder;
use App\Rate;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{

    public function index(Request $request){
        if(!empty($request->get('q'))){
            if($request->get('q')=="ten-san-pham") {
                $products = Product::orderBy('title', 'DESC')
                    ->paginate(16);
            }
            elseif($request->get('q')=="moi-nhat") {
                $products = Product::orderBy('id', 'DESC')
                    ->paginate(16);
            }
            elseif($request->get('q')=="cap-kho") {
                $products = Product::select('products.*')
                ->leftJoin('ware_houses','products.kho','ware_houses.user_id')
                ->orderBy('ware_houses.level', 'DESC')
                    ->paginate(16);
            }
            elseif($request->get('q')=="gia") {
                $products = Product::orderBy('price_out', 'ASC')
                    ->paginate(16);
            }

        }
        else {
            $products = Product::paginate(16);
        }
        $data =[
          "products"=>$products,
        ];
        return view('frontend.product',$data);

    }

    public function CateProduct($cate){

        $cate = CategoryProduct::where('slug',$cate)->first();

        $products = Product::where('category',$cate->id)->paginate(16);
        $data =[
            "products"=>$products,
            "nameCate"=>$cate->name
        ];
        return view('frontend.product',$data);

    }
    public function SingleProduct($cate,$slug){
        $product=Product::select('products.*','users.name as nameKho','users.phone_number as phoneKho','users.id as idKho','users.address as addressKho','ware_houses.id as ware_houses_id','ware_houses.level as levelKho','users.name as nameKho')
                 ->leftJoin('users','users.id','=','products.kho')
            ->leftJoin('ware_houses','users.id','=','ware_houses.user_id')
            ->where('slug',$slug)
            ->first();
        //dd($product);
        $detailImage = DetailImageProduct::where('product_id',$product->id)->get();
//                dd($detailImage);

        $data=[
            "product"=>$product,
            "detailImage"=>$detailImage
        ];
        return view('frontend.product-single',$data);

    }
    public function checkOrder(Request $request){

        $code = $request->get('code-order');
        $order =Order::where('id',$code)->first();
//        dd($order);
        if(count($order)!=0) {

            $customer = User::where('id', $order->customer_id)->first();
            $productOrder = ProductOrder::select('product_orders.*','products.image')
            ->leftJoin('products','product_orders.id_product','products.id')
            ->where('product_orders.order_id', $order->id)->get();
            $orderStatus = OrderStatus::get();
            $data = [
                "order" => $order,
                "customer" => $customer,
                "productOrder" => $productOrder,
                "orderStatus"=>$orderStatus,
            ];
            return view('frontend.check-order', $data);
            }
            else{
                return view('frontend.check-order');

            }

    }
    public function singleOrder(Request $request){
        $data = [
            "name" => $request->get('cf_name'),
            "email" => $request->get('cf_email'),
            "phone" => $request->get('cf_order_number'),
            "comment" => $request->get('cf_message'),
                "link" => $request->get('cf_url'),
            "subject" => "Thông tin order"
        ];
        $to = "xtrieu30@gmail.com";
        Mail::to($to)->send(new OrderInfo($data));
        return redirect()->back()->with('success','success');
    }
    public function customerRate(Request $request){
       $price_rate = $request->get('price_rate');
       $value_rate = $request->get('value_rate');
        $quality_rate =  $request->get('quality_rate');
        $rateValue = ($price_rate + $value_rate + $quality_rate)/3;
        $id_product = $request->get('id_product');
        $id_user = $request->get('id_user');
        $check = Rate::where('product_id',$id_product)->where('users_id',$id_user)->first();
        if(count($check)==0) {
            $rate = new Rate();
            $rate->product_id = $id_product;
            $rate->users_id = $id_user;
            $rate->rate = $rateValue;
            $rate->save();
        }
        else{
            return redirect()->back()->with('RateSuccess','error');
        }
        return redirect()->back()->with('RateSuccess','success');
    }

}
