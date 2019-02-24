<?php

namespace App\Providers;

use App\Cases;
use App\News;
use App\Sys;
use App\Yqlj;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //花都头条
        $hdtt = News::orderBy('created_at','desc')->limit(9)->get();
        //推荐案例
        $tjal = Cases::whereIsTj(1)->orderBy('created_at','desc')->limit(9)->get();
        //热门搜索
        $hot_search = News::whereIsHot(1)->orderBy('created_at','desc')->limit(9)->get();

        $sys = Sys::first();

        $yqlj = Yqlj::get();

        View::share([
            'hdtt' =>$hdtt,
            'tjal' =>$tjal,
            'hot_search' =>$hot_search,
            'sys' =>$sys,
            'yqlj' =>$yqlj,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
