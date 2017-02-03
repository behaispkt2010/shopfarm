<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\Contact;
use App\Mail\OrderInfo;
use App\Util;
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
//        }
        return redirect('/contact')->with('success','success');
    }

}
