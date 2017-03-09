<?php

namespace App\Http\Controllers\Frontend;

use App\CategoryWarehouse;
use App\Mail\Contact;
use App\Mail\OrderInfo;
use App\Notification;
use App\Util;
use App\WareHouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function Contact(){

//        if(!empty(Request::isMethod('post'))) {
//
//            $data = [
//                "name" => $request->get('cf_name'),
//                "email" => $request->get('cf_email'),
//                "phone" => $request->get('cf_order_number'),
//                "comment" => $request->get('cf_message'),
//                "link" => "từ trang liên hệ",
//                "subject" => "Khách hàng cần tư vấn"
//            ];
//            $to = "xtrieu30@gmail.com";
//            Mail::to($to)->send(new OrderInfo($data));
//        }
        return view('frontend.contact');
    }
    public function PostContact(Request $request){

//        if(!empty(Request::isMethod('post'))) {

            $data = [
                "name" => $request->get('cf_name'),
                "email" => $request->get('cf_email'),
                "phone" => $request->get('cf_order_number'),
                "comment" => $request->get('cf_message'),
//                "link" => "từ trang liên hệ",
                "subject" => "Khách hàng cần tư vấn"
            ];
            $to = "xtrieu30@gmail.com";
            Mail::to($to)->send(new Contact($data));
            $data['content'] = "contact";
            $data['author_id'] = $request->get('cf_name').' .SDT: ' .$request->get('cf_order_number');
            Notification::create($data);
//        }
        return redirect('/contact')->with('success','success');
    }
    public function GetResisterWareHouse(){
        return view('frontend.resisterWareHouse');
    }
    public function PostResisterWareHouse(Request $request){
        $data = [
            "name" => $request->get('cf_name'),
            "email" => $request->get('cf_email'),
            "phone" => $request->get('cf_order_number'),
            "comment" => $request->get('cf_message'),
            "subject" => "Khách hàng cần đăng ký Chủ kho"
        ];
        $to = "xtrieu30@gmail.com";
        $data['content'] = "dangkychukho";
        $data['author_id'] = $request->get('cf_name').' .SDT: ' .$request->get('cf_order_number');
        Notification::create($data);
        Mail::to($to)->send(new Contact($data));
        return redirect('/resisterWareHouse')->with('success','success');
    }
    public function DetailWarehouse($warehouse_id) {
        $arrCategoryWarehouse = CategoryWarehouse::get();
        $ware_house = WareHouse::select('ware_houses.*','users.*','ware_houses.address as ware_houses_address')
            ->leftjoin('users','users.id','=','ware_houses.user_id')
            ->where('ware_houses.id',$warehouse_id)
            ->first();
        $data = [
            'ware_house' => $ware_house,
            'arrCategoryWarehouse' => $arrCategoryWarehouse,
        ];
        //dd($ware_house);
        return view('frontend.warehouse', $data);
    }
    public function ConfirmKho(){
        return view('frontend.xacthuckho');
    }
    public function QuangCao(){
        return view('frontend.quangcao');
    }
    public function TraPhi(){
        return view('frontend.dungtraphi');
    }
}
