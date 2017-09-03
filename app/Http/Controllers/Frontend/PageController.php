<?php

namespace App\Http\Controllers\Frontend;

use App\CategoryWarehouse;
use App\Mail\Contact;
use App\Mail\OrderInfo;
use App\Notification;
use App\Util;
use App\WareHouse;
use App\Product;
use App\Events\ViewsCompanyEvents;
use App\Events\ViewsWareHouseEvents;
use App\CompanyImage;
use App\NewsCompany;
use App\Company;
use App\WarehouseImageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
            $to = "behaispkt2010@gmail.com";
            Mail::to($to)->send(new Contact($data));
            $dataNotify['keyname'] = Util::$contact;
            $dataNotify['title'] = "Khách hàng cần được hỗ trợ";
            $dataNotify['content'] = $request->get('cf_name').' .SDT: ' .$request->get('cf_order_number')."cần được hỗ trợ";
            $dataNotify['author_id'] = 1;
            $dataNotify['roleview'] = Util::$roleviewAdmin;
            Notification::create($dataNotify);
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
        $to = "behaispkt2010@gmail.com";
        $dataNotify['keyname'] = Util::$dangkychukho;
        $dataNotify['title'] = "Chủ kho đăng kí mới";
        $dataNotify['content'] = $request->get('cf_name').' .SDT: ' .$request->get('cf_order_number')."cần đăng ký chủ kho";
        $dataNotify['author_id'] = 1;
        $dataNotify['roleview'] = Util::$roleviewAdmin;
        Notification::create($dataNotify);

        Mail::to($to)->send(new Contact($data));
        return redirect('/resisterWareHouse')->with('success','success');
    }
    public function DetailWarehouse($warehouse_id) {
        $arrCategoryWarehouse = CategoryWarehouse::get();
        $arrImageDetail = WarehouseImageDetail::where('warehouse_id',$warehouse_id)->get();
        $getNewProduct = Product::getProductOfWarehouse($warehouse_id,9);
        $warehouse = WareHouse::select('ware_houses.*','users.*','ware_houses.address as ware_houses_address')
            ->leftjoin('users','users.id','=','ware_houses.user_id')
            ->where('ware_houses.id',$warehouse_id)
            ->first();
        $data = [
            'ware_house' => $warehouse,
            'arrImageDetail' => $arrImageDetail,
            'getNewProduct' => $getNewProduct,
            'arrCategoryWarehouse' => $arrCategoryWarehouse,
        ];
        //dd($getNewProduct);
        event(new ViewsWareHouseEvents($warehouse));
        return view('frontend.warehouse', $data);
    }
    public function DetailCompany($company_id) {
        $arrImageDetail = CompanyImage::where('company_id', $company_id)->get();
        $arrCompany = Company::select('company.*', 'users.*', 'company.address as company_address', 'company.name as name_company')
            ->leftjoin('users','users.id','=','company.user_id')
            ->where('company.id', $company_id)
            ->first();
        $getNewsCompany = NewsCompany::getNewsCompany($company_id, 16);  
        $data = [
            'company' => $arrCompany,
            'arrImageDetail' => $arrImageDetail,
            'getNewsCompany' => $getNewsCompany,
        ];
        return view('frontend.company-single', $data);
    }

    public function DetailNewsCompany($newscompanySlug, $company_id, $newscompany_id) {

        $arrImageDetail = CompanyImage::where('company_id', $company_id)->get();
        $arrNewsCompany = NewsCompany::select('users.*','company.*','news_company.*','company.name as namecompany','company.id as companyID','category_products.name as categoryname')
            ->leftjoin('users','users.id','=','news_company.author_id')
            ->leftjoin('company','company.user_id','=','news_company.author_id')
            ->leftjoin('category_products','news_company.category','=','category_products.id')
            ->where('news_company.id', $newscompany_id)
            ->first();

        $category = $arrNewsCompany->category; 
        $idNews = $arrNewsCompany->id;
        $getNewsCompanyRelated = NewsCompany::getAllNewsCompanyRelated($category,$idNews,5);
        $getWareHouseRelated = WareHouse::orderBy('level','desc')->take(5)->get();
        // dd($arrNewsCompany);
        $data = [
            'arrImageDetail' => $arrImageDetail,
            'arrNewsCompany' => $arrNewsCompany,
            'getNewsCompanyRelated' => $getNewsCompanyRelated,
            'getWareHouseRelated' => $getWareHouseRelated,
        ];    
        event(new ViewsCompanyEvents($arrNewsCompany));
        return view('frontend.newscompany-single', $data);   
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
    public function UpgradeKho(){
        return view('frontend.upgradekho');
    }
    public function Help ($content) {
        if ($content == "dang-ky-chu-kho") {
            return view('frontend.help_resisterwarehouse');
        } elseif ($content == "co-hoi") {
            return view('frontend.help_cohoi');
        } elseif ($content == "van-chuyen") {
            return view('frontend.help_transport');
        }
    }
    public function getWareHouseArea($area) {
        $from = 62;
        $to = 68;
        $title = "Tây Nguyên";
        if ($area == 'tay-nguyen') {
            $from = 62;
            $to = 68;
            $title = "Tây Nguyên";
        } elseif ($area == 'dong-nam-bo') {
            $from = 70;
            $to = 79;
            $title = "Đông Nam Bộ";
        } elseif ($area == 'tay-nam-bo') {
            $from = 80;
            $to = 96;
            $title = "Tây Nam Bộ";
        }
        $getAllWareHouse = WareHouse::select('ware_houses.*')
            ->leftjoin('province','province.provinceid','=','ware_houses.province')
            ->whereBetween('province.provinceid', array($from, $to))
            ->paginate(30);
        // dd($getAllWareHouse);    
        $data =[
            "title" => $title,
            "getAllWareHouse" => $getAllWareHouse
        ];
        return view('frontend.warehouse-level',$data);
    }
}
