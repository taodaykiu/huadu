<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/23
 * Time: 22:02
 */

namespace App\Http\Controllers;


use App\CaseCate;
use App\Cases;
use App\Product;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class CaseController extends Controller
{
    public function index(Request $request)
    {
        //顶部案例
        $top = Cases::OrderBy('created_at','desc')->limit(6)->get();

        //分类
        $cate1 = CaseCate::whereType(0)->get();
        $cate2 = CaseCate::whereType(1)->get();

        //案例
        $list =  Cases::OrderBy('created_at','desc')->paginate(10);

        //推荐案例
        $tj = Cases::OrderBy('created_at','desc')->where('is_tj',1)->limit(8)->get();

        if (Agent::isMobile()) {
            if ($request->cate_id=='') {
                $list =  Cases::OrderBy('created_at','desc')->get();
            } else {
                $list =  Cases::where('cate_id', $request->cate_id)->OrderBy('created_at','desc')->get();
            }


            return view('wap.case.index',compact('top','cate1','cate2','list','tj'));
        }

        return view('home.case.index',compact('top','cate1','cate2','list','tj'));
    }


    public function data(Request $request)
    {
        $data = Cases::find($request->id);
        //上一篇
        $prev_article = Cases::where('id','<',$request->id)->orderBy('id','desc')->first();
        //下一篇
        $next_article = Cases::where('id','>',$request->id)->orderBy('id','asc')->first();

        //相关阅读

        $likes = Cases::whereNotIn('id',[$request->id])->orderBy('created_at','desc')->limit(6)->get();


        if (Agent::isMobile()) {
            return view('wap.case.data',compact('data','prev_article','next_article','likes'));
        }

        return view('home.case.data',compact('data','prev_article','next_article','likes'));
    }
}
