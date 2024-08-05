<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::query()->with('categories')->latest('id')->paginate(5);

        return view('admin.posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::query()->pluck('name', 'id')->all();
        $users = User::query()->pluck('name', 'id')->all();
        return view('admin.posts.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $pathFile = Storage::put('posts', $request->file('img'));

            $data['img'] = 'storage/' . $pathFile;
        }

        Post::query()->create($data);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = DB::table('posts')
            ->join('categories', 'posts.categories_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name as category')
            ->first();
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Categories::query()->pluck('name', 'id')->all();
        $users = User::query()->pluck('name', 'id')->all();
        return view('admin.posts.edit', compact('categories', 'users', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $pathFile = Storage::put('posts', $request->file('img'));

            $data['img'] = 'storage/' . $pathFile;
        }

        $currentImg = $post->img;

        $post->update($data);

        if ($request->hasFile('img') 
            && $currentImg
            && file_exists(public_path($currentImg)) ) {
        } {
            unlink(public_path($currentImg));
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        if ($post->img
            && file_exists(public_path($post->img)) ) {
        } {
            unlink(public_path($post->img));
        }

        return redirect()->route('posts.index');

    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%{$query}%")
                     ->paginate(10);

        return view('posts.search', compact('posts', 'query'));
    }
}
