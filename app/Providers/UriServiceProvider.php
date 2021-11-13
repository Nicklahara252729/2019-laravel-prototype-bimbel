<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class UriServiceProvider extends ServiceProvider
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
        $uri = '';
        if(Request::segment(1)==''){
            $uri = '';
        }else if(Request::segment(1)=='tentang'){
            $uri = 'tentang';
        }else if(Request::segment(1)=='paket-harga'){
            $uri = 'paket Harga';
        }else if(Request::segment(1)=='testimoni'){
            $uri = 'testimoni';
        }else if(Request::segment(1)=='blog'){
            $uri = 'blog';
        }else if(Request::segment(1)=='tryout-online'){
            $uri = 'tryout online';
        }else if(Request::segment(1)=='login'){
            $uri = 'login';
        }else if(Request::segment(1)=='register'){
            $uri = 'register';
        }
        view()->share('uri',$uri);
    }
}
