<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralCodeController extends Controller
{
    public function index(){
        return view('admin.referralcode.index');
    }
}
