<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
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
        $menus = Menu::where('parent_id', null)->get();
        return view('admin.menu.index', ['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create', ['menus'=>Menu::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch($request->menuToggle){
            case '1' :
                $validatedData = $this->validate($request, [
                    'name'  =>  'required',
                    'slug'  =>  'required',
                    'serial'  =>  '',
                    'is_mega'  =>  '',
                ]);
                $validatedData['parent_id']=$request->parent_id;
                Menu::create($validatedData);
                return redirect()->route('menu.index')->with('success-message', 'Menu Added Successfully!');
                break;
            default:
                $validatedData = $this->validate($request, [
                    'name'  =>  'required',
                    'slug'  =>  'required',
                    'serial'  =>  '',
                    'is_mega'  =>  '',
                ]);
                Menu::create($validatedData);
                return redirect()->route('menu.index')->with('success-message', 'Menu Added Successfully!');
                break;
        }
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
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', ['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $validatedData = $this->validate($request, [
            'name'  =>  'required',
            'serial'  =>  'numeric',
            'slug'  =>  '',
            'is_mega'   =>  '',
            'parent_id'   =>  '',
        ]);
        $menu->update($validatedData);
        return back()->with('success-message', 'Menu updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if($menu->subMenus->count()>0){
            return redirect()->back()->withErrors(['error-message'=>'Delete Sub Menu first']);
        }
        $menu->delete();
        return back()->with('success-message', 'Menu deleted successfully!');
    }

    public function subMenus(Menu $menu)
    {
        $subMenus = $menu->subMenus;
        return view('admin.menu.index', ['menus'=>$subMenus]);
    }
}
