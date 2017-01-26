<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\OrderInfo;
use App\Util;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function Contact(){
        $data=[
            "name"=>"nguyễn văn a",
            "email"=>"a@gmail.com",
            "phone"=>"012102801",
            "comment"=>"sds",
            "link"=>"http://dsdsds/com",
             "subject" =>"Thông tin order"
        ];
        $to = "xtrieu30@gmail.com";
        Mail::to($to)->send(new OrderInfo($data));
        return view('frontend.contact');
    }
}
