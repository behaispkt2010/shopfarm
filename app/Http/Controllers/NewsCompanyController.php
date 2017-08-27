<?php

namespace App\Http\Controllers;

use App\NewsCompany;
use App\CategoryProduct;
use App\Util;
use App\User;
use App\Company;
use App\Mail\MailBroadCastProduct;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Mail;

class NewsCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsCompany = NewsCompany::get();
        $data=[
            'article'=>$newsCompany,
            'type' => 'newscompany',
        ];
        return view('admin.newscompany.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryProduct::get();
        $data=[
            'category'=>$category,
        ];
        return view('admin.newscompany.edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $today = date("Y-m-d_H-i-s");
        $strIDUser = Auth::user()->id;
        $newsCompany = new NewsCompany;
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
        $checkSlug = NewsCompany::where('slug', $data['slug'])->count();
        if($checkSlug != 0){
            $data['slug'] =  $data['slug'].'-'.$today;
        }
        NewsCompany::create($data);
        $getInfoWareHouse = NewsCompany::select('news_company.*', 'users.*', 'products.kho as idwarehouse','news_company.title as productName','company.name as companyName')
            ->leftjoin('products','products.category','=','news_company.category')
            ->leftjoin('users','users.id','=','products.kho')
            ->leftjoin('company','company.user_id','=','news_company.author_id')
            ->where('news_company.category',$data['category'])
            ->where('news_company.author_id', $strIDUser)
            ->get();
        $getInfoCompany = Company::select('users.*')
            ->leftjoin('users','users.id','=','company.user_id')
            ->where('company.user_id', $strIDUser)
            ->get(); 
        $arrMailWareHouse = [];
        foreach ($getInfoWareHouse as $key => $itemInfoWareHouse) {
            if ( !in_array($itemInfoWareHouse->email, $arrMailWareHouse) ) {
                array_push($arrMailWareHouse, $itemInfoWareHouse->email);
            }    
            $productName = $itemInfoWareHouse->productName;
            $companyName = $itemInfoWareHouse->companyName;
            $content = $itemInfoWareHouse->content;
        }
        foreach ($getInfoCompany as $key => $itemgetInfoCompany) {
            $phoneCompany = $itemgetInfoCompany->phone_number;
        }
        // echo $companyName;
        // print_r($arrMailWareHouse);   
        // dd($getInfoWareHouse);
        foreach ($arrMailWareHouse as $key => $itemMailWareHouse) {
            $data = [
                "companyName" => $companyName,
                "content" => $content,
                "phoneCompany" => $phoneCompany,
                "subject" => "Sản phẩm Công ty đang cần ". $productName
            ];
            $to = $itemMailWareHouse;
            $to = "behaispkt2010@gmail.com";
            Mail::to($to)->send(new MailBroadCastProduct($data));
        }
        



        // return redirect('admin/newscompany/')->with(['flash_level' => 'success', 'flash_message' => 'Tạo thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $newsCompany = NewsCompany::find($id);
        $data=[
            'id' => $id,
            'article'=>$newsCompany,
        ];
        return view('admin.newscompany.edit',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $category = CategoryProduct::get();
        $newsCompany = NewsCompany::find($id);
        $data=[
            'id' => $id,
            'article'=>$newsCompany,
            'category'=>$category,
        ];
        return view('admin.newscompany.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $today = date("Y-m-d_H-i-s");
        $data = $request->all();
        $newsCompany =  NewsCompany::find($id);
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
        $checkSlug = NewsCompany::where('slug', $data['slug'])->count();
        if($checkSlug != 0){
            $data['slug'] =  $data['slug'].'-'.$today;
        }
        $newsCompany->update($data);
        return redirect('admin/newscompany/')->with(['flash_level' => 'success', 'flash_message' => 'Lưu thành công']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsCompany =  NewsCompany::destroy($id);
        if(!empty($newsCompany)) {
            return redirect('admin/newscompany/')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công']);
        }
        else{
            return redirect('admin/newscompany/')->with(['flash_level' => 'danger', 'flash_message' => 'Chưa thể xóa']);

        }
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $newsCompany = NewsCompany::get()
            ->map(function ($newsCompany) {
                return [
                    'id' => $newsCompany->id,
                    'title' => $newsCompany->title,
                    'category' => CategoryProduct::getSlugCategoryProduct($newsCompany->category), // cang ak
                    'author_id' => NewsCompany::getUserName($newsCompany->author_id),
                    'created_at' => $newsCompany->created_at->format('d/m/Y'),
                ];
            });

        return Datatables::of($newsCompany)
            ->add_column('actions',
                '<a class = "btn-xs btn-info" href="{{route(\'newscompany.edit\',[\'id\' => $id])}}" style="margin-right: 5px;display: inline"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
                            <form action="{{route(\'newscompany.destroy\',[\'id\' => $id])}}" method="post" class="form-delete" style="display: inline">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="text" class="hidden" value="{{$id}}">
                                 {{method_field("DELETE")}}
                           <a type="submit" class = "btn-xs btn-danger" name ="delete_modal" style="display: inline-block"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </form>')
            ->remove_column('id')
            ->make();
    }
}
