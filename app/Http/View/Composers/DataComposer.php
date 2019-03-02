<?php

namespace App\Http\View\Composers;

use App\Models\Menu;
use Illuminate\View\View;
use App\Models\SiteConfiguration;

class DataComposer
{
    protected $meta;
    protected $menus;

    public function __construct()
    {
        $this->meta = SiteConfiguration::first();
        $this->menus = Menu::query()->where('parent_id', null)->orderBy('serial')->get();
    }

    public function compose(View $view)
    {
        $view->with([
            'meta'=>$this->meta,
            'menus' =>  $this->menus,
        ]);
    }
}