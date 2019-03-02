<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Post;
use App\Models\SiteMeta;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        $homeMeta = SiteMeta::where('id', 1)->first();
        if($homeMeta->meta!=1){
            return redirect()->route('post.single', $homeMeta->meta);
        }
        return view('user.index',[
            'posts' =>   Post::with('media')->where('is_featured', 1)->orderBy('serial')->get(),
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('user.post.single',[
            'post'=>$post,
            'related_post'  =>  Post::query()->inRandomOrder()->take(6)->get(),
        ]);
    }

    public function singleCategory(Category $category)
    {
        return view('user.category.single',[
            'category'  =>  $category,
            'posts'     =>  $category->posts()->inRandomOrder()->take(12)->get(),
        ]);
    }

    public function singleTag(Tag $tag)
    {
        return view('user.tag.single', [
            'tag'   =>  $tag,
            'posts'     =>  $tag->posts()->inRandomOrder()->take(12)->get(),
        ]);
    }

    public function search(Request $request)
    {
        if($request->search){
            return redirect()->route('search.results', $request->search);
        }
        return back();
    }

    public function searchResults($search)
    {
        $posts = Post::query()
            ->where('title', 'LIKE', '%'.$search.'%')
            ->orWhere('content', 'LIKE','%'.$search.'%')
            ->inRandomOrder()
            ->take(12)
            ->get();
        return view('user.search.index', [
            'posts' =>  $posts,
            'search'    =>  $search,
        ]);
    }
}
