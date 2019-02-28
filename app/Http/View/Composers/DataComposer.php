<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\SiteConfiguration;

class DataComposer
{
    protected $meta;

    public function __construct()
    {
        $this->meta = SiteConfiguration::first();
    }

    public function compose(View $view)
    {
        $view->with(['meta'=>$this->meta]);
    }
}