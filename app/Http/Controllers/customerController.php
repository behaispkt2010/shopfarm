<?php

namespace App\Http\Controllers;

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

}
