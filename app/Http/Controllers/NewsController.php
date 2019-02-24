<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/23
 * Time: 23:44
 */

namespace App\Http\Controllers;


use App\News;
use App\Product;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $active = 1;
        $list = News::whereType(1)->orderBy('created_at','desc')->paginate(10);
        return view('home.news.index',compact('active','list'));
    }

    public function industry()
    {
        $active = 2;
        $list = News::whereType(2)->orderBy('created_at','desc')->paginate(10);
        return view('home.news.index',compact('active','list'));
    }

    public function question()
    {
        $active = 3;
        $list = News::whereType(3)->orderBy('created_at','desc')->paginate(10);
        return view('home.news.index',compact('active','list'));
    }

    public function data(Request $request)
    {
        $data = News::find($request->id);
        //上一篇
        $prev_article = News::where('id','<',$request->id)->orderBy('id','desc')->first();
        //下一篇
        $next_article = News::where('id','>',$request->id)->orderBy('id','asc')->first();

        //相关阅读

        $likes = News::whereNotIn('id',[$request->id])->orderBy('created_at','desc')->limit(6)->get();
        //猜你想要了解
        $wants = Product::orderBy('created_at','desc')->limit(6)->get();

        return view('home.news.data',compact('data','prev_article','next_article','likes','wants'));
    }
}