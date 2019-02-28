<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
//                'user.index',
//                'user.post.single',
                'user.layouts.header',
                'user.layouts.footer',
            ], 'App\Http\View\Composers\DataComposer'
        );
    }
}
