<?php

namespace App\Http\Controllers;

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
            ->orwhere('phone_number','LIKE','%'.$q.'%')->get();
        }
        else {
            $users = User::orderBy('id','DESC')
                ->get();
        }

        $data=[
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
        $data=[
            'roles' => $roles
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
        $roleUser =
//        dd($roleUser);
        $data=[
            'id' => $id,
            'roles' =>$roles,
            'user'=>$user,
            'roleUser' =>$roleUser
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
        $data['email']=$request->get('email');
        if(!empty($request->get('password'))){
            $data['password']=$request->get('password');
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
    public function destroy(Request $request,$id)
    {
        $user =  User::destroy($id);
        if(!empty($user)) {
                return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{

                return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Chưa thể xóa']);

        }
    }
}
