<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index', ['categories'   => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create', ['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name'  =>  'required|unique:categories',
            'image' =>  'required|image|mimes:jpg,jpeg,png|max:2048',
            'parent_id' =>  '',
            'type'      =>  '',
        ]);

        if($validatedData['type']=='1')
        {
            $validatedData['parent_id']=null;
            $image = $request->file('image');
            $newPhoto = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/categories');
            $photo = Image::make($image->getRealPath())->resize(710, 350)->save($destinationPath.'/'.$newPhoto);
            $validatedData['image'] = 'categories/'.$newPhoto;
            Category::create($validatedData);
            return redirect()->back()->with('success-message', 'Category added successfully!');
        }
        $image = $request->file('image');
        $newPhoto = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/categories');
        $photo = Image::make($image->getRealPath())->resize(710, 350)->save($destinationPath.'/'.$newPhoto);
        $validatedData['image'] = 'categories/'.$newPhoto;
        Category::create($validatedData);
        return redirect()->back()->with('success-message', 'Category added successfully!');
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
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'categories'  =>  Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $this->validate($request, [
            'name'  =>  'required|unique:categories,name,'.$category->id,
            'image' =>  'image|mimes:jpg,jpeg,png|max:2048',
            'parent_id' =>  '',
            'type'      =>  '',
        ]);
        if($validatedData['type']=='1')
        {
            $validatedData['parent_id']=null;
            if($request->hasFile('image')){
                $image_path = public_path('uploads/'.$category->image);
                unlink($image_path);
                $image = $request->file('image');
                $newPhoto = $image->hashName();
                $destinationPath = public_path('/uploads/categories');
                $photo = Image::make($image->getRealPath())->resize(710, 350)->save($destinationPath.'/'.$newPhoto);
                $validatedData['image'] = 'categories/'.$newPhoto;
            }
            $category->update($validatedData);
            return redirect()->back()->with('success-message', 'Category updated successfully!');
        }
        if($request->hasFile('image')){
            $image_path = public_path('uploads/'.$category->image);
            unlink($image_path);
            $image = $request->file('image');
            $newPhoto = $image->hashName();
            $destinationPath = public_path('/uploads/categories');
            $photo = Image::make($image->getRealPath())->resize(710, 350)->save($destinationPath.'/'.$newPhoto);
            $validatedData['image'] = 'categories/'.$newPhoto;
        }
        $category->update($validatedData);
        return redirect()->back()->with('success-message', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $image_path = public_path('/uploads/'.$category->image);
        unlink($image_path);
        $category->delete();
        return back();
    }
}
