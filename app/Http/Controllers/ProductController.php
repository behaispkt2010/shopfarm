<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\DetailImageProduct;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductUpdatePrice;
use App\User;
use App\Util;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    /**
     * ajax update
     */
    public function UpdateProductAjax(Request $request)
    {
        $id = $request->get('id');
        $product =  Product::find($id);
        $productUpdatePrice = new ProductUpdatePrice();
        $data['product_id']=$id;
        $data['price_in']=$request->get('price_in');
        $data['price_out']=$request->get('price_out');
        $data['number']=$request->get('number');
        if(empty($request->get('supplier'))) {
            $supplier= "none";
        }
        else{
            $supplier=$request->get('supplier');
        }
        $data['supplier'] = $supplier;


        $productUpdatePrice->create($data);

        $data1['price_in']=$request->get('price_in');
        $data1['price_out']=$request->get('price_out');
        $data1['inventory_num']=$data['number']+$product->inventory_num;

        $product->update($data1);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);
    }
    /**
     * ajax update
     */
    public function checkProductAjax(Request $request)
    {
        $id = $request->get('id');
        $product =  Product::find($id);
//        dd($id);
        $data1['inventory_num']=$request->get('num');
        $data1['id']=$request->get('id');

        $product->update($data1);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);
    }
public function AjaxGetProduct(Request $request){
    $id= $request->get('id');
    $product = Product::find($id);
    $response = array(
        'image' => $product->image,
        'name' => $product->title,
        'price' => $product->price_out,
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

        if($request->get('name') || $request->get('kho')|| $request->get('category')){
            $name = $request->get('name');
            $kho = $request->get('kho');
            $cate = $request->get('category');
            $product1 = Product::query();
            if(!empty($name)){
                $product1 =  $product1->where('title','LiKE','%'.$name.'%');
            }
            if(!empty($cate)){
                $product1 =  $product1->where('category',$cate);
            }
            if(!empty($kho)){
                $product1 =  $product1->where('kho',$kho);
            }

            $product = $product1->get();


        }
        else {
            if(!Auth::user()->hasRole('kho'))
                $product = Product::orderBy('id','DESC')
                ->get();
            else {
                $product = Product::orderBy('id','DESC')
                    ->where('kho',Auth::user()->id)
                    ->get();
            }
        }
        $category = CategoryProduct::get();
        $wareHouses = User::select('users.*','ware_houses.id as ware_houses_id','ware_houses.level as level')
            ->leftjoin('role_user','role_user.user_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','users.id')
            ->where('role_user.role_id',4)
            ->orderBy('id','DESC')
            ->get();
        $data=[
            'product'=>$product,
            'wareHouses'=>$wareHouses,
            'category'=>$category,
            'type' => 'products',
        ];
        return view('admin.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryProduct::get();
        $wareHouses = User::select('users.*','ware_houses.id as ware_houses_id','ware_houses.level as level')
            ->leftjoin('role_user','role_user.user_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','users.id')
            ->where('role_user.role_id',4)
            ->orderBy('id','DESC')
            ->get();
        $data=[
            'category'=>$category,
            'wareHouses'=>$wareHouses
        ];
        return view('admin.products.edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $today = date("Y-m-d_H-i-s");
        $product = new Product;
        $data = $request->all();
        if(!empty(Auth::user()->id)) {
            $data['author_id'] = Auth::user()->id;
        }
        else{
            $data['author_id'] = 1;
        }

        if ($request->hasFile('image')) {
            $data['image']  = Util::saveFile($request->file('image'), '');
        }

        if (!empty($request->get('slug_seo'))) {
            $data['slug']  = Util::builtSlug($request->get('slug_seo'));
        }
        else{
            $data['slug']  = Util::builtSlug($request->get('title'));
        }
        $checkSlug = Product::where('slug', $data['slug'])->count();
        if($checkSlug != 0){
            $data['slug'] =  $data['slug'].'-'.$today;
        }
        $product1 = Product::create($data);
//        dd($product);
        $Price = new ProductUpdatePrice();
        $dataPrice['product_id']=$product1->id;
        $dataPrice['price_in']=$request->get('price_in');
        $dataPrice['price_out']=$request->get('price_out');
        $dataPrice['supplier']= "create";
        $dataPrice['number']= $request->get('inventory_num');
        ProductUpdatePrice::create($dataPrice);


        $dataImage['product_id']=$product1->id;
        if(!empty($request->file('image_detail'))) {
            foreach ($request->file('image_detail') as $image_detail) {
//            DetailImageProduct::where('id_product',$dataImage['id_product'])->delete();
                $imageDetail = new DetailImageProduct();
                $dataImage['image'] = Util::saveFile($image_detail, '');
                DetailImageProduct::create($dataImage);
            }
        }
        return redirect('admin/products/')->with(['flash_level' => 'success', 'flash_message' => 'Tạo thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);
        $data=[
            'id' => $id,
            'product'=>$product,
        ];
        return view('admin.products.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $category = CategoryProduct::get();
        $product = Product::find($id);
        $detailImage = DetailImageProduct::where('product_id',$id)->get();
        $wareHouses = User::select('users.*','ware_houses.id as ware_houses_id','ware_houses.level as level')
            ->leftjoin('role_user','role_user.user_id','=','users.id')
            ->leftjoin('ware_houses','ware_houses.user_id','=','users.id')
            ->where('role_user.role_id',4)
            ->orderBy('id','DESC')
            ->get();
        $data=[
            'id' => $id,
            'product'=>$product,
            'category'=>$category,
            'detailImage' =>$detailImage,
            'wareHouses'=>$wareHouses
        ];
//        dd($detailImage);
        return view('admin.products.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $today = date("Y-m-d_H-i-s");
        $data = $request->all();
//        $files = $request->file('image_detail');
        $product =  Product::find($id);
        if(!empty(Auth::user()->id)) {
            $data['author_id'] = Auth::user()->id;
        }
        else{
            $data['author_id'] = 1;
        }

        if ($request->hasFile('image')) {
            $data['image']  = Util::saveFile($request->file('image'), '');
        }
        if ($request->get('slug_seo')!="") {
            $data['slug']  = Util::builtSlug($request->get('slug_seo'));
        }
        else{
            $data['slug']  = Util::builtSlug($request->get('title'));
        }
        $checkSlug = Product::where('slug', $data['slug'])->count();
        if($checkSlug != 0){
            $data['slug'] =  $data['slug'].'-'.$today;
        }
        $product->update($data);
        $Price = new ProductUpdatePrice();
        $dataPrice['product_id']=$id;
        $dataPrice['price_in']=$request->get('price_in');
        $dataPrice['price_out']=$request->get('price_out');
        $dataPrice['supplier']= "create";
        $dataPrice['number']= 0;
        ProductUpdatePrice::create($dataPrice);


        $dataImage['product_id']=$id;
        if(!empty($request->file('image_detail'))) {
//            DetailImageProduct::where('product_id',$dataImage['product_id'])->delete();
            foreach ($request->file('image_detail') as $key=>$image_detail) {
                $imageDetail = new DetailImageProduct();
                $dataImage['image'] = Util::saveFile($image_detail, '');
                DetailImageProduct::create($dataImage);
            }
        }
        return redirect('admin/products/')->with(['flash_level' => 'success', 'flash_message' => 'Lưu thành công']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::destroy($id);
        if(!empty($product)) {
            return redirect('admin/products/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{
            return redirect('admin/products/')->with(['flash_level' => 'success', 'flash_message' => 'Chưa thể xóa']);

        }
    }
    public function deleteDetailImage(Request $request)
    {
        DetailImageProduct::where('id',$request->get('id'))->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        return \Response::json($response);
    }
}
