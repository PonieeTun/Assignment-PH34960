<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $firstPost = DB::table("posts")
            ->join('categories', 'posts.categories_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name as categories_name')
            ->first();
        return view("client.homepage", compact("firstPost"));
    }

    public function categories($slug)
    {
        //Hàm lấy tất cả bài viết theo slug categories
        $category = DB::table("categories")->where("slug", $slug)->first();
        $posts = DB::table("posts")
            ->join("categories", 'posts.categories_id', '=', 'categories.id')
            ->where('posts.categories_id', $category->id)
            ->select('posts.*', 'categories.name as category_name')
            ->get();

        return view('client.pageCategories', compact('posts'));
    }


    public function detail($id)
    {
        $detail = DB::table('posts')->where('id', $id)->first();
        return view('client.detail', ['posts' => $detail]);
    }
}
