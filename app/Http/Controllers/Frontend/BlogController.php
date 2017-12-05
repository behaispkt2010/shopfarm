<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $news = Category::leftJoin('articles', 'categories.id', '=', 'articles.category')
            ->where('articles.category','=', 1)
            ->orderBy('articles.id','DESC')
            ->take(10)
            ->get();
        $data = [
            'news' => $news
        ];
        // dd($data);
        return view('frontend.blogs.blog_homepage', $data);
        // return view('frontend.blog',$data);

    }

    public function CateBlog($cate){

        $category = Category::where('slug',$cate)->first();
        if(count($category) == 0){
            $idCate = 0;
        }
        else {
            $idCate = $category->id;
        }
        $blogs = Article::select('articles.*','views.view')
            ->leftJoin('views', 'articles.id', '=', 'views.blog_id')
            ->orderBy('articles.id','DESC')
            ->where('articles.category',$idCate)
            ->paginate(10);

        $data=[
            'blogs'=>$blogs,
            'category'=>$category
        ];
//        dd($blogs);
        return view('frontend.blog',$data);


    }
    public function SingleBlog($cate,$slug){
        $singleBlog = Article::select('articles.*','views.view')
        ->leftJoin('views','views.id','=','articles.id')
            ->where('slug',$slug)
            ->first();
        $data =[
            "singleBlog"=>$singleBlog,
            "cate"=>$cate
        ];
//        dd($singleBlog);
        return view('frontend.blog-single',$data);

    }
}
