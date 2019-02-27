<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homePage()
    {
        return view('admin.meta.homepage', [
            'meta'  => SiteMeta::where('name', 'home')->first(),
        ]);
    }

    public function storeHomePageMeta(Request $request)
    {
        $homeMeta = SiteMeta::where('name', 'home')->first();
        if($homeMeta){
            $this->homeUpdate($request, $homeMeta);
        }else{
            $this->homeCreate($request);
        }
        return back();
    }

    public function homeUpdate(Request $request, SiteMeta $homeMeta){
        switch($request->type){
            case 1:
                $homeMeta->update(['name'=>'home', 'meta'=>'1']);
                break;
            default:
                $homeMeta->update(['name'=>'home', 'meta'=>$request->meta]);
                break;
        }
    }
    public function homeCreate(Request $request){
        switch($request->type){
            case 1:
                SiteMeta::create(['name'=>'home', 'meta'=>'1']);
                break;
            default:
                SiteMeta::create(['name'=>'home', 'meta'=>$request->meta]);
                break;
        }
    }
}
