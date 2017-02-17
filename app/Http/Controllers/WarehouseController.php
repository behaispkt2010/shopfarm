<?php

namespace App\Http\Controllers;

use App\Bank;
use App\BankWareHouse;
use App\Http\Requests\BankWareHouseRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\WareHouseRequest;
use App\Http\Requests\LevelKhoRequest;
use App\Http\Requests\ConfirmKhoRequest;
use App\Http\Requests\AjaxDetailRequest;
use App\Mail\UpgradeKho;
use App\Notification;
use App\Province;
use App\User;
use App\WareHouse;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use DB;
use App\Util;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WarehouseController extends Controller
{
    public function AjaxChangePass(Request $request)
    {

        $user = User::find($request->get('id'));
        $pwdhash = ($request->get('old_password'));
        if (Hash::check($pwdhash, $user->password) == false) {
            $response = array(
                'status' => 'danger',
                'msg' => 'Mật khẩu cũ thông đúng',
            );
            return \Response::json($response);

        }

        if (empty($request->get('old_password')) || empty($request->get('new_pass')) || empty($request->get('renew_pass'))) {
            $response = array(
                'status' => 'danger',
                'msg' => 'Vui lòng điền đầy đủ',
            );
            return \Response::json($response);

        }
        if ($request->get('new_pass') != $request->get('renew_pass')) {
            $response = array(
                'status' => 'danger',
                'msg' => 'Mật khẩu mới không trùng',
            );
            return \Response::json($response);

        }
        $data['password'] = $request->get('new_pass');
        $user->update($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );

        return \Response::json($response);
    }

    public function AjaxDetail(Request $request)
    {
        $id = $request->get('id');
        $warehouse = WareHouse::find($id);
        $data = $request->all();
        $image_kho = $request->image_kho;
        if ($request->hasFile('image_kho')) {
            $data['image_kho']  = Util::saveFile($request->file('image_kho'), '');
        }
        if ($request->get('user_test') == 2) {
            $dateTest = Util::$datetest;
            $date = date('Y-m-d H:i:s');
            $dateafter = date('Y-m-d', strtotime($date . ' +' . $dateTest . ' days'));
            $data['date_end_test'] = $dateafter;
        } else {
            $data['date_end_test'] = NULL;
        }
        $warehouse->update($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

    }

    public function AjaxInfo(UserRequest $request)
    {
        $id = $request->get('id');
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

    }
    public function AjaxBank(BankWareHouseRequest $request)
    {
        $ware_id = $request->ware_id;
        $check = $request->check;
        $active = 0;
        $checkBankActive = BankWareHouse::where('ware_id',$ware_id)->get();
        foreach($checkBankActive as $itemCheckBankActive){
            if (($itemCheckBankActive->check == 1)){
                $active++;
            }
        }
        if ($active >= 1  && $check == 1){
            $response = array(
                'status' => 'danger',
                'msg' => 'Đã có ngân hàng được sử dụng',
            );
        } else {
            $data = $request->all();
            BankWareHouse::create($data);
            //dd("dsds");
            $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
        }
        return \Response::json($response);

    }

    public function AjaxEditBank(BankWareHouseRequest $request)
    {
        $ware_id = $request->ware_id;
        $active = 0;
        $idBank = 0;
        $id = $request->get('id_bank');
        $check = $request->check;
        $checkBankActive = BankWareHouse::where('ware_id',$ware_id)->get();
        foreach($checkBankActive as $itemCheckBankActive){

            if (($itemCheckBankActive->check == 1)){
                $active++;
                $idBank = $itemCheckBankActive->id;
            }
        }
        if ($active >= 1  && $check == 1 && $idBank != $id){
            $response = array(
                'status' => 'danger',
                'msg' => 'Đã có ngân hàng được sử dụng',
            );
        } else {

            $warehouse = BankWareHouse::find($id);
            $data = $request->all();
            $warehouse->update($data);
            $response = array(

                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
        }
        return \Response::json($response);

    }

    public function AjaxEditLevel(LevelKhoRequest $request)
    {
        $id = $request->get('id');
        $levelkho = $request->get('levelkho');
        $data = [
            'level' => $levelkho
        ];
        $warehouse = WareHouse::where('id', $id)->update($data);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

    }
    public function AjaxConfirmKho(Request $request)
    {
        $id = $request->get('id');
        $checkWareHouse = WareHouse::find($id);
        if (($checkWareHouse->name_company == $request->name_company) && ($checkWareHouse->address == $request->address) && ($checkWareHouse->mst == $request->mst) && ($checkWareHouse->ndd == $request->ndd) && ($checkWareHouse->time_active == $request->time_active)) {
            $confirm_kho = 1;
            $data = [
                'confirm_kho' => $confirm_kho
            ];
            $warehouse = WareHouse::where('id', $id)->update($data);

            $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
        } else {
            $response = array(
                'status' => 'danger',
                'msg' => 'Có lỗi xảy ra! Vui lòng kiểm tra lại thông tin hoặc cập nhật thông tin kho trước khi Xác nhận kho',
            );
        }
        return \Response::json($response);

    }
    public function AjaxQuangCao(Request $request)
    {
        $id = $request->get('id');
        $quangcao = 1;
        $data = [
            'quangcao' => $quangcao
        ];
        $warehouse = WareHouse::where('id', $id)->update($data);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);

    }
    public function AjaxSendRequestUpdateLevelKho(LevelKhoRequest $request){
        //$data = $request->all();
        $userID = Auth::user()->id;
        $user = User::leftjoin('ware_houses','ware_houses.user_id','=','users.id')->where('users.id',$userID)->get()->toArray();
        $name = "";
        $wareHouseID = "";
        $email = "";
        $phone_number = "";
        foreach($user as $itemUser){
            $name = $itemUser['name'];
            $wareHouseID = $itemUser['id'];
            $email = $itemUser['email'];
            $phone_number = $itemUser['phone_number'];
        }
        $data['content'] = "upgradeLevelKho";
        $data['author_id'] = $userID;
        $data['levelkho'] = $request->get('levelkho');
        Notification::create($data);
        //dd($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        /*$mailData = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone_number,
            "comment" => "Chủ kho $name muốn nâng cấp kho lên $request->levelkho. Click vào <a href='$url'>đây</a> để tiến hành nâng cấp kho",
            "subject" => "Chủ kho cần nâng cấp kho"
        ];
        $to = "behaispkt2010@gmail.com";
        Mail::to($to)->send(new UpgradeKho($mailData));*/

        return \Response::json($response);
    }
    public function AjaxReQuestConfirmKho(Request $request){
        //$data = $request->all();
        $userID = Auth::user()->id;
        $user = User::leftjoin('ware_houses','ware_houses.user_id','=','users.id')->where('users.id',$userID)->get()->toArray();
        $name = "";
        $wareHouseID = "";
        $email = "";
        $phone_number = "";
        foreach($user as $itemUser){
            $name = $itemUser['name'];
            $wareHouseID = $itemUser['id'];
            $email = $itemUser['email'];
            $phone_number = $itemUser['phone_number'];
        }
        $data['content'] = "confirmkho";
        $data['author_id'] = $userID;
        Notification::create($data);
        //dd($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        /*$mailData = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone_number,
            "comment" => "Chủ kho $name muốn nâng cấp kho lên $request->levelkho. Click vào <a href='$url'>đây</a> để tiến hành nâng cấp kho",
            "subject" => "Chủ kho cần nâng cấp kho"
        ];
        $to = "behaispkt2010@gmail.com";
        Mail::to($to)->send(new UpgradeKho($mailData));*/

        return \Response::json($response);
    }
    public function AjaxReQuestQuangCao(Request $request){
        //$data = $request->all();
        $userID = Auth::user()->id;
        $user = User::leftjoin('ware_houses','ware_houses.user_id','=','users.id')->where('users.id',$userID)->get()->toArray();
        $name = "";
        $wareHouseID = "";
        $email = "";
        $phone_number = "";
        foreach($user as $itemUser){
            $name = $itemUser['name'];
            $wareHouseID = $itemUser['id'];
            $email = $itemUser['email'];
            $phone_number = $itemUser['phone_number'];
        }
        $data['content'] = "quangcao";
        $data['author_id'] = $userID;
        Notification::create($data);
        //dd($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        /*$mailData = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone_number,
            "comment" => "Chủ kho $name muốn nâng cấp kho lên $request->levelkho. Click vào <a href='$url'>đây</a> để tiến hành nâng cấp kho",
            "subject" => "Chủ kho cần nâng cấp kho"
        ];
        $to = "behaispkt2010@gmail.com";
        Mail::to($to)->send(new UpgradeKho($mailData));*/

        return \Response::json($response);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('q')) {
            $q = $request->get('q');
            $wareHouse = User::select('users.*', 'ware_houses.id as ware_houses_id', 'ware_houses.level as level')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('ware_houses', 'ware_houses.user_id', '=', 'users.id')
                ->where('role_user.role_id', 4)
//                ->orderBy('id','DESC')
                ->orwhere('users.name', 'LIKE', '%' . $q . '%')
                ->orwhere('users.id', 'LIKE', '%' . $q . '%')
                ->orwhere('users.phone_number', 'LIKE', '%' . $q . '%')->get();
        } else {
            $wareHouse = User::select('users.*', 'ware_houses.id as ware_houses_id', 'ware_houses.level as level')
                ->leftjoin('role_user', 'role_user.user_id', '=', 'users.id')
                ->leftjoin('ware_houses', 'ware_houses.user_id', '=', 'users.id')
                ->where('role_user.role_id', 4)
                ->orderBy('id', 'DESC')
                ->get();
//            dd($users);
        }
        $data = [
            'wareHouse' => $wareHouse,
        ];


        return view('admin.warehouse.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $category = Category::get();
//        $data=[
//            'category'=>$category,
//        ];

        return view('admin.warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(WareHouseRequest $request)
    {

        DB::beginTransaction();
        try {
            $today = date("Y-m-d_H-i-s");
            $dataUser['name'] = $request->get('name');
            $dataUser['email'] = $request->get('email');
            $dataUser['phone_number'] = $request->get('phone_number');
            $dataUser['password'] = $request->get('password');
            if (empty($request->get('password'))) {
                $dataUser['password'] = "123456";
            }
            $dataUser['image'] = "/images/user_default.png";
            $user = User::create($dataUser);
            $user->attachRole(4);
            $wareHouse = new WareHouse();
            $data = $request->all();
            if ($request->hasFile('image_kho')) {
                $data['image_kho']  = Util::saveFile($request->file('image_kho'), '');
            }
            $data['user_id'] = $user->id;
            if ($request->get('user_test') == 2) {
                $dateTest = Util::$datetest;
                $date = date('Y-m-d H:i:s');
                $dateafter = date('Y-m-d', strtotime($date . ' +' . $dateTest . ' days'));
                $data['date_end_test'] = $dateafter;
            }
            $res = WareHouse::create($data);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('admin/warehouse/create')->with(['flash_level' => 'danger', 'flash_message' => 'Tạo không thành công']);
        }
        DB::commit();
        return redirect('admin/warehouse/' . $res->id . '/edit')->with(['flash_level' => 'success', 'flash_message' => 'Tạo thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wareHouse = WareHouse::find($id);
        $data = [
            'wareHouse' => $wareHouse,
            'id' => $id,
        ];
        return view('admin.warehouse.edit', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$userID = Auth::user()->id;
        $user = User::leftjoin('ware_houses','ware_houses.user_id','=','users.id')->where('users.id',$userID)->get()->toArray();
        //dd($wareHouse);
        $name = "";
        $wareHouseID = "";
        foreach($user as $itemUser){
            $name = $itemUser['name'];
            $wareHouseID = $itemUser['id'];
        }
        echo $name;
        echo $wareHouseID;
        echo "<pre>";
        print_r($user);
        echo "</pre>";
        die;*/
        $bank = Bank::get();
        $province = Province::get();
        $wareHouse = WareHouse::find($id);
        $bankWareHouse = BankWareHouse::where('ware_id', $id)->get();
//        dd($province);
        $userInfo = User::where('id', $wareHouse->user_id)->first();
        $data = [
            'wareHouse' => $wareHouse,
            'bank' => $bank,
            'province' => $province,
            'userInfo' => $userInfo,
            'bankWareHouse' => $bankWareHouse,
            'id' => $id,
        ];

        return view('admin.warehouse.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $warehouse = WareHouse::find($id);
            $res = WareHouse::destroy($id);
            BankWareHouse::where('ware_id', $id)->delete();
            User::where('id', $warehouse->user_id)->delete();
        } catch (\Exception $e) {

            DB::rollback();
            return redirect('admin/warehouse/')->with(['flash_level' => 'danger', 'flash_message' => 'Chưa thể xóa']);


        }

        DB::commit();
        return redirect('admin/warehouse/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);

    }
}
