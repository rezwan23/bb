<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', ['posts'=>Post::query()->orderBy('serial')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create', [
            'categories'    =>  Category::all(),
            'tags'      =>  Tag::all(),
            'medias'    =>  Media::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' =>  'required',
            'content'   =>  '',
            'style'     =>  '',
            'meta'  =>  '',
            'featured_media_id'  =>  '',
            'is_featured'   =>  '',
            'serial'    =>  '',
        ]);
        $post = Post::create($data);
        $post->categories()->attach($request->category_id);
        $post->tags()->attach($request->tag_id);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', [
            'post'  => $post,
            'categories'    =>  Category::all(),
            'tags'  =>  Tag::all(),
            'medias'    =>  Media::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $data = $this->validate($request, [
            'title' =>  'required',
            'content'   =>  '',
            'style'     =>  '',
            'meta'  =>  '',
            'featured_media_id'  =>  '',
            'is_featured'   =>  '',
            'serial'    =>  ''
        ]);
        $post->update($data);
        $post->categories()->sync($request->category_id);
        $post->tags()->sync($request->tag_id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
