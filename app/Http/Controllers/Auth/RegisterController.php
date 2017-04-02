<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Traits\CaptchaTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers,CaptchaTrait;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['captcha'] = $this->captchaCheck();
        return Validator::make($data, [
            'name' => 'required|max:255',
            'province' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|numbers|symbols|min:6|confirmed',
            'g-recaptcha-response'  => 'required',
            'captcha' => 'required|min:1'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'myIntroCode' => $data['myIntroCode'],
            'introCode' => $data['introCode'],
            'province' => $data['province'],
            'image' => '/images/user_default.png',
            'password' => $data['password'],
        ]);
        $user->attachRole(3);
        return $user;
    }
}
