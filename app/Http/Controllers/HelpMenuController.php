<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAjax(CategoryProductRequest $request){

         $category = new CategoryProduct();
         $today = date("Y-m-d_H-i-s");
         $data = $request->all();
         $data['slug']  = Util::builtSlug($request->get('name'));
         $checkSlug = CategoryProduct::where('slug', $data['slug'])->count();
         if($checkSlug != 0){
             $data['slug'] =  $data['slug'].'-'.$today;
         }
         CategoryProduct::create($data);
         $response = array(
             'status' => 'success',
             'msg' => 'Setting created successfully',
         );
         return \Response::json($response);
     }

    /**
     * ajax update
     */
    public function updateAjax(CategoryProductRequest $request)
    {
        $id = $request->get('id');
        $category =  CategoryProduct::find($id);
        $today = date("Y-m-d_H-i-s");
        $data = $request->all();
        $data['slug'] = Util::builtSlug($request->get('name'));
        $checkSlug = CategoryProduct::where('slug', $data['slug'])->count();
        if ($checkSlug != 0) {
            $data['slug'] = $data['slug'] . '-' . $today;
        }
        $category->update($data);
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
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
        if($request->get('name') || $request->get('kho')){
            $name = $request->get('name');
            $kho = $request->get('kho');
            $categoryProduct = CategoryProduct::where('name','LiKE','%'.$name.'%')->paginate(6);
        }
        else {
            $categoryProduct = CategoryProduct::paginate(12);
        }
        $categoryProduct0 = CategoryProduct::where('parent','0')->get();
        $wareHouses = User::select('users.*','ware_houses.id as ware_houses_id','ware_houses.level as level')
            ->leftjoin('role_user','role_user.user_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','users.id')
            ->where('role_user.role_id',4)
            ->orderBy('id','DESC')
            ->get();
        $data=[
            'categoryProduct'=> $categoryProduct,
            'categoryProduct0' => $categoryProduct0,
            "wareHouses"=>$wareHouses,
        ];
        //dd($categoryProduct);
        return view('admin.categoryProduct.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res =  CategoryProduct::destroy($id);
        if(!empty($res)) {
            return redirect('admin/categoryProducts/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{
            return redirect('admin/categoryProducts/')->with(['flash_level' => 'success', 'flash_message' => 'Chưa thể xóa']);

        }
    }
}
