<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Category;


class BlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
   }

   public function getBlogs(){
    return view('admin.blog.home');
   }
   public function getBlogsAdd(){
    $cats = Category::where('module','1')->pluck('name','id');
    $data = ['cats' => $cats];
    return view('admin.blog.add', $data);
   }
}
