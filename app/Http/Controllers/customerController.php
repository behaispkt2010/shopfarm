<?php

namespace App\Http\Controllers;

use App\Order;
use App\Province;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('q')){
            $q = $request->get('q');
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id',3)
//                ->orderBy('id','DESC')
                ->where('name','LIKE','%'.$q.'%')
                ->orwhere('id','LIKE','%'.$q.'%')
                ->orwhere('phone_number','LIKE','%'.$q.'%')->get();
        }
        else {
            $users = User::leftjoin('role_user','role_user.user_id','=','users.id')
                ->where('role_user.role_id',3)
                ->orderBy('id','DESC')
                ->get();
//            dd($users);
        }

        $data=[
            'users'=>$users,
            'type' => 'users',
        ];
        return view('admin.customers.index',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::get();

        $data=[
            'role' => "customer",
            'province' => $province,
        ];
        return view('admin.users.edit',$data);
    }
    public function show($id)
    {
        $history = Order::leftjoin('product_orders','orders.id','=','product_orders.order_id')
            ->leftjoin('users','orders.customer_id','=','users.id')
            ->selectRaw('users.*, users.name as customer_name')
            ->selectRaw('orders.*')
            ->selectRaw('product_orders.*, product_orders.name as product_orders_name')
            ->where('orders.customer_id',$id)
            ->orderBy('orders.time_order','DESC')
            ->limit(10)
            ->get();
        $customer_name = "";
        foreach ($history as $itemHistory) {
            $customer_name = $itemHistory->customer_name;
        }
        $data = [
            'customer_name' => $customer_name,
            'history' => $history,
            'id' => $id,
        ];
        return view('admin.customers.history', $data);

    }

}
