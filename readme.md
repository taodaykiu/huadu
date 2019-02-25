## 花都
```
先把 AppServiceProvider.php 注释下面
//        //花都头条
//        $hdtt = News::orderBy('created_at','desc')->limit(9)->get();
//        //推荐案例
//        $tjal = Cases::whereIsTj(1)->orderBy('created_at','desc')->limit(9)->get();
//        //热门搜索
//        $hot_search = News::whereIsHot(1)->orderBy('created_at','desc')->limit(9)->get();
//
//        $sys = Sys::first();
//
//        $yqlj = Yqlj::get();
//
//        View::share([
//            'hdtt' =>$hdtt,
//            'tjal' =>$tjal,
//            'hot_search' =>$hot_search,
//            'sys' =>$sys,
//            'yqlj' =>$yqlj,
//        ]);

然后 
cp .env.example .env
composer install 
php artisan migrate
php artisan key:
php artisan storage:link
 
```
