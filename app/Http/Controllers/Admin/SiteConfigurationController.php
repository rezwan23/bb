<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteConfiguration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteConfigurationController extends Controller
{
    public function index()
    {
        $configurationInfo = SiteConfiguration::first();
        return view('admin/configure', ['configuration' => $configurationInfo]);
    }

    public function update(Request $request)
    {
        $data = $this->validate($request, [
            'name'  =>  'required',
            'logo'  =>  'image|max:200',
            'meta'  =>  '',
            'fb'=>'',
            'pinterest'=>'',
            'g_plus'=>'',
            'twitter'=>'',
        ]);
        $configurationInfo = SiteConfiguration::first();
        if($configurationInfo){
            $photo = $request->file('logo');
            if($request->hasFile('logo')){
                $image = public_path('/uploads/'.$configurationInfo->info);
                unlink($image);
                $data['logo'] = $photo->store('/');
            }
            $configurationInfo->update($data);
        }else{
            $photo = $request->file('logo');
            $data['logo'] = $photo->store('/');
            SiteConfiguration::create($data);
        }
        return back();
    }

}
