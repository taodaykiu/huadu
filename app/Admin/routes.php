<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/api/getcate', 'ProductCateController@getcate');
    $router->get('/api/getlevel1', 'ProductController@getlevel1');
    $router->get('/api/getlevel2', 'ProductController@getlevel2');
    $router->get('/api/getzhauntilevel1', 'ZhuantiController@getzhauntilevel1');
    $router->get('/api/getzhauntilevel2', 'ZhuantiController@getzhauntilevel2');
    $router->get('/api/getcasecate', 'CaseController@getcasecate');
    $router->get('/api/getgw', 'CaseController@getgw');


    $router->resource('/product_cate', ProductCateController::class);
    $router->resource('/lunbo', LunboController::class);
    $router->resource('/product', ProductController::class);
    $router->resource('/zhuanti', ZhuantiController::class);
    $router->resource('/casecate', CaseCateController::class);
    $router->resource('/algw', AlgwController::class);
    $router->resource('/case', CaseController::class);
    $router->resource('/news', NewsController::class);
    $router->resource('/about_image', AboutImageController::class);
    $router->resource('/about_page', AboutPageController::class);
    $router->resource('/ggdz', GgdzController::class);
    $router->resource('/sys', SysController::class);
    $router->resource('/yqlj', YqljController::class);
});
