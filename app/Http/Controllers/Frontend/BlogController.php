<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog');

    }

    public function CateBlog(){
        return view('frontend.blog');

    }
    public function SingleBlog(){
        return view('frontend.blog-single');

    }
}
