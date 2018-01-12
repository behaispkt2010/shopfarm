<?php
namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderStatus;
use App\Product;
use App\ProductOrder;
use App\Province;
use App\Company;
use App\User;
use App\Role;
use App\Driver;
use App\RoleUser;
use App\ProductUpdatePrice;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller 
{
	public function getExportOrders(Request $request)
    {
    	$author_id = Auth::user()->id;
        if($request->get('q')){
            $q = $request->get('q');
            if(Auth::user()->hasRole(['kho'])) {
                $arrAllOrders = Order::leftJoin('users', 'orders.customer_id', '=', 'users.id')
                    ->leftjoin('province', 'province.provinceid', '=', 'users.province')
                    ->selectRaw('orders.id as STT, users.name as Người_Nhận, users.phone_number as SDT, orders.time_order as Thời_gian_đặt_hàng, orders.note as Chú_thích, orders.type_pay as Hình_thức_thanh_toán, orders.status_pay as Trạng_thái_thanh_toán, orders.received_pay as Đã_nhận, orders.remain_pay as Còn_lại, orders.type_driver as Hình_thức_vận_chuyển, orders.name_driver as Tài_xế, orders.phone_driver as SDT_Tài_xế, orders.number_license_driver as Biển_số_xe, users.address as Địa_Chỉ_Giao_Hàng, province.name as Tỉnh_TP')
                    ->where('kho_id', $author_id)
                    ->where('users.name', 'LIKE', '%' . $q . '%')
                    ->orwhere('users.phone_number', 'LIKE', '%' . $q . '%')
                    ->orderBy('orders.id','DESC')
                    ->get();
            }
            else{
                $arrAllOrders = Order::leftJoin('users', 'orders.customer_id', '=', 'users.id')
                    ->leftjoin('province', 'province.provinceid', '=', 'users.province')
                    ->selectRaw('orders.id as STT, users.name as Người_Nhận, users.phone_number as SDT, orders.time_order as Thời_gian_đặt_hàng, orders.note as Chú_thích, orders.type_pay as Hình_thức_thanh_toán, orders.status_pay as Trạng_thái_thanh_toán, orders.received_pay as Đã_nhận, orders.remain_pay as Còn_lại, orders.type_driver as Hình_thức_vận_chuyển, orders.name_driver as Tài_xế, orders.phone_driver as SDT_Tài_xế, orders.number_license_driver as Biển_số_xe, users.address as Địa_Chỉ_Giao_Hàng, province.name as Tỉnh_TP')
                    ->where('users.name', 'LIKE', '%' . $q . '%')
                    ->orwhere('users.phone_number', 'LIKE', '%' . $q . '%')
                    ->orderBy('orders.id','DESC')
                    ->get();
            }

        }
        else if ( Auth::user()->hasRole(['kho']) ){
            $arrAllOrders = Order::leftJoin('users', 'orders.customer_id', '=', 'users.id')
                ->leftjoin('province', 'province.provinceid', '=', 'users.province')
                ->selectRaw('orders.id as STT, users.name as Người_Nhận, users.phone_number as SDT, orders.time_order as Thời_gian_đặt_hàng, orders.note as Chú_thích, orders.type_pay as Hình_thức_thanh_toán, orders.status_pay as Trạng_thái_thanh_toán, orders.received_pay as Đã_nhận, orders.remain_pay as Còn_lại, orders.type_driver as Hình_thức_vận_chuyển, orders.name_driver as Tài_xế, orders.phone_driver as SDT_Tài_xế, orders.number_license_driver as Biển_số_xe, users.address as Địa_Chỉ_Giao_Hàng, province.name as Tỉnh_TP')
                ->where('kho_id',$author_id)
                ->orderBy('orders.id','DESC')
                ->get();
        }
        else {
            $arrAllOrders = Order::leftJoin('users', 'orders.customer_id', '=', 'users.id')
                ->leftjoin('province', 'province.provinceid', '=', 'users.province')
                ->selectRaw('orders.id as STT, users.name as Người_Nhận, users.phone_number as SDT, orders.time_order as Thời_gian_đặt_hàng, orders.note as Chú_thích, orders.type_pay as Hình_thức_thanh_toán, orders.status_pay as Trạng_thái_thanh_toán, orders.received_pay as Đã_nhận, orders.remain_pay as Còn_lại, orders.type_driver as Hình_thức_vận_chuyển, orders.name_driver as Tài_xế, orders.phone_driver as SDT_Tài_xế, orders.number_license_driver as Biển_số_xe, users.address as Địa_Chỉ_Giao_Hàng, province.name as Tỉnh_TP')
                ->orderBy('orders.id','DESC')
                ->get();
        }
        $data = $arrAllOrders->toArray();
		return Excel::create('Don_Hang', function($excel) use ($data) {
			$excel->sheet('Đơn hàng', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
    public function getExportProduct(Request $request) 
    {
    	if($request->get('name') || $request->get('kho')|| $request->get('category')){
            $name = $request->get('name');
            $kho = $request->get('kho');
            $cate = $request->get('category');
            $product1 = Product::query();
            if(!empty($name)){
                if(!Auth::user()->hasRole('kho'))
                    $product1 =  $product1->where('title','LiKE','%'.$name.'%');
                else {
                    $product1 =  $product1->where('title','LiKE','%'.$name.'%')->where('kho',Auth::user()->id);
                }
            }
            if(!empty($cate)){
                if(!Auth::user()->hasRole('kho'))
                    $product1 =  $product1->where('category',$cate);
                else {
                    $product1 =  $product1->where('category',$cate)->where('kho',Auth::user()->id);
                }
            }
            if(!empty($kho)){
                if(!Auth::user()->hasRole('kho'))
                    $product1 =  $product1->where('kho',$kho);
                else {
                    $product1 =  $product1->where('kho',Auth::user()->id);
                }
            }
            $product = $product1->get();;
        }
        else if(!Auth::user()->hasRole('kho')) {
            $product = Product::orderBy('id', 'DESC')
                ->get();
        }
        else {
            $product = Product::orderBy('id','DESC')
                ->where('kho',Auth::user()->id)
                ->get();
        }
    	$data = $product->toArray();
		return Excel::create('San_Pham', function($excel) use ($data) {
			$excel->sheet('Sản Phẩm', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
    public function getExportCompany(Request $request) 
    {
        if ($request->get('q')) {
            $q = $request->get('q');
            $company = User::select('users.*', 'company.id as company_id','company.user_id as userID')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('company', 'company.user_id', '=', 'users.id')
                ->where('role_user.role_id', 6)
                ->where('users.name', 'LIKE', '%' . $q . '%')
                ->orwhere('users.id', 'LIKE', '%' . $q . '%')
                ->orwhere('users.phone_number', 'LIKE', '%' . $q . '%')
                ->get();
        } else {
            $company = User::select('users.*', 'company.id as company_id','company.user_id as userID')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('company', 'company.user_id', '=', 'users.id')
                ->where('role_user.role_id', 6)
                ->orderBy('id', 'DESC')
                ->get();

        }
        $data = $company->toArray();
        return Excel::create('Cong_Ty', function($excel) use ($data) {
            $excel->sheet('Danh sách Công ty', function($sheet) use ($data)
            {
                $sheet->fromArray($data, NULL, 'A3');
            });
        })->download('xlsx');
    }
    public function getExportWarehouse(Request $request) 
    {
    	if ($request->get('q')) {
            $q = $request->get('q');
            $wareHouse = User::select('users.*', 'ware_houses.id as ware_houses_id','ware_houses.user_id as userID', 'ware_houses.level as level', 'ware_houses.confirm_kho as confirm_kho', 'ware_houses.quangcao as quangcao')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('ware_houses', 'ware_houses.user_id', '=', 'users.id')
                ->where('role_user.role_id', 4)
                ->where('users.name', 'LIKE', '%' . $q . '%')
                ->orwhere('users.id', 'LIKE', '%' . $q . '%')
                ->orwhere('users.phone_number', 'LIKE', '%' . $q . '%')
                ->get();
        } else {
            $wareHouse = User::select('users.*', 'ware_houses.id as ware_houses_id','ware_houses.user_id as userID', 'ware_houses.level as level', 'ware_houses.confirm_kho as confirm_kho', 'ware_houses.quangcao as quangcao')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('ware_houses', 'ware_houses.user_id', '=', 'users.id')
                ->where('role_user.role_id', 4)
                ->orderBy('id', 'DESC')
                ->get();
        }
    	$data = $wareHouse->toArray();
		return Excel::create('Chu_Kho', function($excel) use ($data) {
			$excel->sheet('Danh sách Chủ Kho', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
    public function getExportUser(Request $request) 
    {
    	if($request->get('q')){
            $q = $request->get('q');
            $users = User::where('name','LIKE','%'.$q.'%')
                ->orwhere('id','LIKE','%'.$q.'%')
                ->orwhere('phone_number','LIKE','%'.$q.'%')
                ->get();
        }
        else {
            $users = User::orderBy('id','DESC')
                ->get();
        }
    	$data = $users->toArray();
		return Excel::create('User', function($excel) use ($data) {
			$excel->sheet('Danh sách User', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
    public function getExportStaffs(Request $request) 
    {
        if($request->get('q')){
            $q = $request->get('q');
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id',5)
                ->where('name','LIKE','%'.$q.'%')
                ->orwhere('id','LIKE','%'.$q.'%')
                ->orwhere('phone_number','LIKE','%'.$q.'%')
                ->get();
        }
        else {
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id',5)
                ->orderBy('id','DESC')
                ->get();
        }
        $data = $users->toArray();
        return Excel::create('Nhan_Vien', function($excel) use ($data) {
            $excel->sheet('Danh sách Nhân viên', function($sheet) use ($data)
            {
                $sheet->fromArray($data, NULL, 'A3');
            });
        })->download('xlsx');
    }
    public function getExportCustomer(Request $request) 
    {
        if($request->get('q')){
            $q = $request->get('q');
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id', 3)
                ->where('name','LIKE','%'.$q.'%')
                ->orwhere('id','LIKE','%'.$q.'%')
                ->orwhere('phone_number','LIKE','%'.$q.'%')
                ->get();
        }
        else {
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id', 3)
                ->orderBy('id','DESC')
                ->get();
        }
    	$data = $users->toArray();
		return Excel::create('Khach_Hang', function($excel) use ($data) {
			$excel->sheet('Danh sách Khách hàng', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
    public function getExportDriver(Request $request) 
    {
        if ($request->get('name') || $request->get('kho')) {
            $name = $request->get('name');
            $kho = $request->get('kho');
            $driver1 = Driver::query();
            if(!empty($name)){
                if(!Auth::user()->hasRole('kho'))
                    $driver1 =  $driver1->where('name_driver','LiKE','%'.$name.'%')->orwhere('phone_driver','LiKE','%'.$name.'%');
                else {
                    $driver1 =  $driver1->where('kho', Auth::user()->id)->where('name_driver','LiKE','%'.$name.'%')->orwhere('phone_driver','LiKE','%'.$name.'%');
                }
            }
            if(!empty($kho)){
                if(!Auth::user()->hasRole('kho'))
                    $driver1 =  $driver1->where('kho',$kho);
                else {
                    $driver1 =  $driver1->where('kho',Auth::user()->id);
                }
            }
            $driver = $driver1->get();
        }
        else if(!Auth::user()->hasRole('kho')) {
            $driver = Driver::orderBy('id', 'DESC')
                ->get();
        }
        else {
            $driver = Driver::orderBy('id','DESC')
                ->where('kho',Auth::user()->id)
                ->get();
        }
        $data = $driver->toArray();
        return Excel::create('Tai_xe', function($excel) use ($data) {
            $excel->sheet('Danh sách Tài xế', function($sheet) use ($data)
            {
                $sheet->fromArray($data, NULL, 'A3');
            });
        })->download('xlsx');
    }
    public function getExportHisInput(Request $request) 
    {
    	$user_id = Auth::user()->id;
        if(!empty($request->get('date'))){
            $date = $request->get('date');    
            if ( Auth::user()->hasRole(\App\Util::$viewHistoryInput) ) {
                $productUpdatePrice=ProductUpdatePrice::where(DB::raw("(DATE_FORMAT(created_at,'%d-%m-%Y'))"),$date)
                    ->orderBy('id','DESC')
                    ->get();
            } else {
                $productUpdatePrice=ProductUpdatePrice::select('product_update_prices.*')
                    ->where(DB::raw("(DATE_FORMAT(product_update_prices.created_at,'%d-%m-%Y'))"),$date)
                    ->leftjoin('products','products.id','=','product_update_prices.product_id')
                    ->where('products.kho', $user_id)
                    ->orderBy('id','DESC')
                    ->get();
            }
        }
        elseif(!empty($request->get('from'))){

            $from = $request->get('from');
            $to = $request->get('to');
            if ( Auth::user()->hasRole(\App\Util::$viewHistoryInput) ) {
                $productUpdatePrice = ProductUpdatePrice::groupBy(DB::raw("DATE(created_at)"))
                ->selectRaw('sum(price_in * number) as sum_price_in')
                ->selectRaw('sum(price_out) as sum_price_out')
                ->selectRaw('count(*) as count')
                ->selectRaw('sum(number) as sum_number')
                ->selectRaw('created_at')
                ->whereBetween('created_at', array(new DateTime($from), new DateTime($to)))
                ->orderBy('id','DESC')
                ->get();
            } else {
                $productUpdatePrice = ProductUpdatePrice::leftjoin('products','products.id','=','product_update_prices.product_id')
                    ->where('products.kho', $user_id)
                    ->groupBy(DB::raw("DATE(product_update_prices.created_at)"))
                    ->selectRaw('sum(product_update_prices.price_in * product_update_prices.number) as sum_price_in')
                    ->selectRaw('sum(product_update_prices.price_out) as sum_price_out')
                    ->selectRaw('count(*) as count')
                    ->selectRaw('sum(product_update_prices.number) as sum_number')
                    ->selectRaw('product_update_prices.created_at')
                    ->whereBetween('product_update_prices.created_at', array(new DateTime($from), new DateTime($to)))
                    ->orderBy('product_update_prices.id','DESC')
                    ->get();
            }
        }
        else {
            if ( Auth::user()->hasRole(\App\Util::$viewHistoryInput) ) {
                $productUpdatePrice = ProductUpdatePrice::groupBy(DB::raw("DATE(created_at)"))
                ->selectRaw('sum(price_in * number) as sum_price_in')
                ->selectRaw('sum(price_out) as sum_price_out')
                ->selectRaw('count(*) as count')
                ->selectRaw('sum(number) as sum_number')
                ->selectRaw('created_at')
                ->orderBy('id','DESC')
                ->get();
            } else {
                $productUpdatePrice = ProductUpdatePrice::leftjoin('products','products.id','=','product_update_prices.product_id')
                    ->where('products.kho', $user_id)
                    ->groupBy(DB::raw("DATE(product_update_prices.created_at)"))
                    ->selectRaw('sum(product_update_prices.price_in * product_update_prices.number) as sum_price_in')
                    ->selectRaw('sum(product_update_prices.price_out) as sum_price_out')
                    ->selectRaw('count(*) as count')
                    ->selectRaw('sum(product_update_prices.number) as sum_number')
                    ->selectRaw('product_update_prices.created_at')
                    ->orderBy('product_update_prices.id','DESC')
                    ->get();
            }
        }
    	$data = $productUpdatePrice->toArray();
		return Excel::create('Lich_Su_Nhap_Hang', function($excel) use ($data) {
			$excel->sheet('Lịch sử nhập hàng', function($sheet) use ($data)
	        {
				$sheet->fromArray($data, NULL, 'A3');
	        });
		})->download('xlsx');
    }
}