<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/ganggui', 'ProductController@index');
Route::get('/ganggui/{id}', 'ProductController@cate');
Route::get('/product/{id}', 'ProductController@product');


Route::get('/wenjiangui', 'ProductController@wenjiangui');
Route::get('/mijijia', 'ProductController@mijijia');
Route::get('/gengyigui', 'ProductController@gengyigui');
Route::get('/baoxiangui', 'ProductController@baoxiangui');
Route::get('/xiaoyongjiaju', 'ProductController@xiaoyongjiaju');
Route::get('/tushuguanjiaju', 'ProductController@tushuguanjiaju');
Route::get('/syssb', 'ProductController@syssb');
Route::get('/huojia', 'ProductController@huojia');
Route::get('/buxiugang', 'ProductController@buxiugang');
Route::get('/dianzibaomigui', 'ProductController@dianzibaomigui');
Route::get('/zhinengmijigui', 'ProductController@zhinengmijigui');
Route::get('/dangangui', 'ProductController@dangangui');
Route::get('/huodongui', 'ProductController@huodongui');
Route::get('/wenjianguicaigou', 'ProductController@wenjianguicaigou');




Route::get('/case', 'CaseController@index');
Route::get('/case/{id}', 'CaseController@data');
Route::get('/news', 'NewsController@index');
Route::get('/news/industry', 'NewsController@industry');
Route::get('/news/question', 'NewsController@question');
Route::get('/news/{id}', 'NewsController@data');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contacts');
Route::get('/ggdz', 'GgdzController@index');
Route::get('/zsjm', 'HomeController@zsjm');
Route::get('/zhaopin', 'HomeController@zhaopin');
Route::get('/wenjianguidaijiagong', 'HomeController@wenjianguidaijiagong');
Route::get('/wenjianguichukou', 'HomeController@wenjianguichukou');
