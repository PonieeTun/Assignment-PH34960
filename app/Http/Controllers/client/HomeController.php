<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $firstPost = DB::table('posts')
            ->join('categories', 'posts.categories_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name as categories_name')
            ->first();

        $latestPosts = DB::table('posts')
            ->join('categories', 'posts.categories_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name as categories_name')
            ->orderBy('created_at', 'desc')
            ->take(7)
            ->get();

        $topStory = DB::table('posts')
            ->join('categories', 'posts.categories_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name as categories_name')
            ->orderBy('views', 'desc')
            ->first();

        return view('client.homepage', compact('firstPost', 'latestPosts', 'topStory'));
    }

    public function categories($slug)
{
    // Hàm lấy tất cả bài viết theo slug categories
    $category = DB::table("categories")->where("slug", $slug)->first();

    if (!$category) {
        // Nếu không tìm thấy category, chuyển hướng hoặc trả về một thông báo lỗi
        return redirect()->route('client.pageCategories')->with('error', 'Category not found');
    }

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
