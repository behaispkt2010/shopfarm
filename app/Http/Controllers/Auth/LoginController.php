<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\WareHouse;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/admin';
    public function redirectPath()
    {
        $user_id = Auth::user()->id;
        $check = WareHouse::checkUserTest($user_id);

        foreach( $check as $itemCheck){
            $user_test = $itemCheck->user_test;
            $date_end_test = $itemCheck->date_end_test;
        }
        //dd($user_test);
        //dd($date_end_test);
        $time_now = date('Y-m-d H:i:s');
        if (($user_test == 2) && ($date_end_test < $time_now )){
            echo "Thời gian dùng thử của quý khách đã hết! Để tiếp tục sử dụng dịch vụ, quý khách vui lòng liên hệ Admin";
            die;
        }
        else if(Auth::user()->hasRole('user')) {
            return '/';
        }

        return '/admin';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


}
