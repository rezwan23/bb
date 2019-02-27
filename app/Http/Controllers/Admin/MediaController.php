<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Image;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.media.index', ['medias'=>Media::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
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
            'title' => 'required|unique:medias',
            'media' =>  'required|image'
        ]);

        $image = $request->file('media');
        $newPhoto = time();
        $ext = $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/media');
        Image::make($image->getRealPath())->resize(250, 150)->save($destinationPath.'/'.$newPhoto.'_thumb.'.$ext);
        Image::make($image->getRealPath())->resize(250, 345)->save($destinationPath.'/'.$newPhoto.'_featured_thumb.'.$ext);
        Image::make($image->getRealPath())->resize(120, 98)->save($destinationPath.'/'.$newPhoto.'_small.'.$ext);
        Image::make($image->getRealPath())->resize(710, 350)->save($destinationPath.'/'.$newPhoto.'_featured.'.$ext);
        $data['media'] = $newPhoto;
        $data['ext'] = $ext;
        Media::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Media $medium)
    {
        return view('admin.media.view', ['media'=>$medium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $medium)
    {
        $this->deleteImages($medium);
        $medium->delete();
        return back();
    }

    public function deleteImages(Media $medium){
        $image_path = public_path('uploads/media');
        $ext = $medium->ext;
        unlink($image_path.'/'.$medium->media.'_thumb.'.$ext);
        unlink($image_path.'/'.$medium->media.'_featured_thumb.'.$ext);
        unlink($image_path.'/'.$medium->media.'_small.'.$ext);
        unlink($image_path.'/'.$medium->media.'_featured.'.$ext);
    }
}
