<?php

namespace App\Http\Controllers;

use App\Province;
use App\Role;
use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function AjaxChangeImage(Request $request){
        $res= $request->all();
        $user = User::find(Auth::user()->id);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        $data['image']="/images/".$request->get('img').".png";
        $user->update($data);
        return \Response::json($response);
    }

public function AjaxCreateCustomer(UserRequest $request)
{
    $user = new User();
    $data = $request->all();
    $t = $request->get('t');
    $pro = Province::where('name',$t)->first();
    $data['province'] = $pro->provinceid;
    if(empty($request->get('password'))){
        $data['password'] = "123456";
    }
    $data['image']="/images/user_default.png";
    $user = User::create($data);
    $user->attachRole(3);
    /*if($request->get('role'))
    {
        $user->attachRole('3');
    }
    else
    {
        $user->roles()->sync([]);
    }*/
    // dd($data);
    $response = array(
        'status' => 'success',
        'msg' => 'Setting created successfully',
        'customer_id' => $user->id
    );
    return \Response::json($response);
    }

    public function AjaxGetDataCustomer(Request $request){
        $user = User::find($request->get('id_select_kh'));
        $response = array(
            'name' => $user->name,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            'address' => $user->address,
            'customer_id' => $user->id
        );
        return \Response::json($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->get('q')){

            $q = $request->get('q');
            $users = User::where('name','LIKE','%'.$q.'%')
                ->orwhere('id','LIKE','%'.$q.'%')
            ->orwhere('phone_number','LIKE','%'.$q.'%')->paginate(9);
        }
        else {
            $users = User::orderBy('id','DESC')
                ->paginate(9);
        }
        $roles = RoleUser::leftjoin('users','role_user.user_id','=','users.id')
            ->leftjoin('roles','roles.id','=','role_user.role_id')
            ->get();
        //dd($roles);
        $data=[
            'roles' => $roles,
            'users'=>$users,
            'type' => 'users',
        ];
        return view('admin.users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $province = Province::get();

        $data=[
            'roles' => $roles,
            'province' => $province,


        ];
        return view('admin.users.edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $today = date("Y-m-d_H-i-s");
        $user = new User;
        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));
        if(empty($request->get('password'))){
            $data['password'] = "123456";
        }
        $data['image']="/images/user_default.png";
        $user = User::create($data);
//        $user->attachRole($request->get('role'));
        if($request->get('role'))
        {
            $user->attachRole($request->get('role'));
        }
        else
        {
            $user->roles()->sync([]);
        }
            return redirect('admin/users')->with(['flash_level' => 'success', 'flash_message' => 'Tạo thành công']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);
        $data=[
            'id' => $id,
            'user'=>$user,
        ];
        return view('admin.users.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::get();
        $user = User::find($id);
        $roleUser = DB::table('role_user')
            ->where('user_id',$id)->first();
//        $roleUser =
//        dd($roleUser);
        $province = Province::get();
        $data=[
            'id' => $id,
            'roles' =>$roles,
            'user'=>$user,
            'roleUser' =>$roleUser,
            'province' => $province,

        ];
//        dd($detailImage);
        return view('admin.users.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $today = date("Y-m-d_H-i-s");
//        $data = $request->all();
        $user =  User::find($id);
        $data['name']=$request->get('name');
        $data['address']=$request->get('address');
        $data['phone_number']=$request->get('phone_number');
        $data['province']=$request->get('province');
        if(!empty($request->get('email'))){
            $data['email']=$request->get('email');
        }
        if(!empty($request->get('password'))){
            $data['password']=bcrypt($request->get('password'));
        }
        $user->update($data);

        $roleUser = RoleUser::where('user_id',$id)->first();
//        dd($roleUser);
        $roleUser->role_id=$request->get('role');
        DB::table('role_user')
            ->where('user_id',$id)
            ->update(['role_id' => $request->get('role')]);


            return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Lưu thành công']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkOrder = User::checkUserHasOrder($id);
        if ($checkOrder == 0) {
            $user =  User::destroy($id);
        } else {
            return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Khách hàng này đang có đơn hàng, nên không thể xóa']);
        }

        if(!empty($user) ) {
            return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{

            return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Chưa thể xóa']);
        }
    }
}
