<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('user.index',[
            'posts' =>   Post::with('media')->where('is_featured', 1)->orderBy('serial')->get(),
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('user.post.single',[
            'post'=>$post,
        ]);
    }

    public function singleCategory(Category $category){
        return view('user.category.single',[
            'category'  =>  $category,
        ]);
    }
}
