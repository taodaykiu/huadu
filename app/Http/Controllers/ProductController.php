<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/23
 * Time: 12:45
 */

namespace App\Http\Controllers;


use App\Cases;
use App\Cate;
use App\News;
use App\Product;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class ProductController extends Controller
{
    public function index()
    {
        //专题系列
        $xilie = Cate::wherePid(0)->whereType(2)->get();

        //.产品分类
        $list = Cate::wherePid(0)->whereType(1)->get();

        $list = $list->map(function ($v) {
            return [
                'id' => $v->id,
                'name' => $v->name,
                'list' => Cate::with('product')->wherePid($v->id)->get(),
                'all' => Product::where('level1', $v->id)->get()
            ];
        });

        if (Agent::isMobile()) {

            return view('wap.product.index', compact('xilie', 'list'));
        }
        return view('home.product.index', compact('xilie', 'list'));
    }

    public function cate(Request $request)
    {

        //专题系列
        $xilie = Cate::wherePid(0)->whereType(2)->get();

        //.产品分类
        $list = Cate::wherePid(0)->whereType(1)->limit(8)->get();

        $list = $list->map(function ($v) {
            return [
                'id' => $v->id,
                'name' => $v->name,
                'list' => Cate::with('product')->wherePid($v->id)->get(),
                'all' => Product::where('level1', $v->id)->get()
            ];
        });

        $lists = Product::where('level2',$request->id)->orderBy('created_at','desc')->get();
        if (Agent::isMobile()) {
            $getid = Cate::find($request->id)['pid'];
            $id = $request->id;
            return view('wap.product.index', compact('xilie', 'list', 'getid', 'id','lists'));
        }
        return view('home.product.index', compact('xilie', 'list'));
    }


    /**
     * 产品详情
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function product(Request $request)
    {
        $data = Product::find($request->id);

        //相关产品、
        $xg_list = Product::where('level2', $data->level2)->orderBy('created_at', 'desc')->whereNotIn('id', [$request->id])->get();

        //热销产品
        $hot = Product::whereIsTj(1)->orderBy('created_at', 'desc')->limit(6)->get();
        if (Agent::isMobile()) {

            return view('wap.product.data', compact('data', 'xg_list', 'hot'));
        }
        return view('home.product.data', compact('data', 'xg_list', 'hot'));
    }


    public function wenjiangui()
    {
        $list = Cate::with('product')->where('pid', 56)->get();

        //推荐案例
        $tjal = Cases::whereCateId(18)->orderBy('created_at', 'desc')->limit(6)->get();
        //文件柜资讯
        $wjgzx = News::whereType(4)->orderBy('created_at', 'desc')->limit(21)->get();

        if (Agent::isMobile()) {

            return view('wap.product.wenjiangui', compact('list', 'tjal', 'wjgzx'));
        }

        return view('home.product.wenjiangui', compact('list', 'tjal', 'wjgzx'));
    }


    public function mijijia()
    {
        $list = Product::where('level1', 58)->orderBy('created_at', 'desc')->get();
        //资讯
        $news = News::whereType(5)->orderBy('created_at', 'desc')->limit(21)->get();
        //推荐案例
        $tjal = Cases::whereCateId(19)->orderBy('created_at', 'desc')->limit(6)->get();

        if (Agent::isMobile()) {

            return view('wap.product.mijijia', compact('list', 'news', 'tjal'));
        }

        return view('home.product.mijijia', compact('list', 'news', 'tjal'));
    }

    public function gengyigui()
    {

        $list = Cate::with('product')->where('pid', 57)->get();
        //资讯
        $news = News::whereType(6)->orderBy('created_at', 'desc')->limit(21)->get();

        if (Agent::isMobile()) {
            return view('wap.product.gengyigui', compact('list', 'news'));
        }
        return view('home.product.gengyigui', compact('list', 'news'));
    }

    public function baoxiangui()
    {

        $list = Cate::with('product')->where('pid', 59)->get();
        //推荐
        $tj = Product::where('level1', 59)->whereNotIn('level2', [76, 77, 78, 79])->get();
        $news = News::whereType(7)->orderBy('created_at', 'desc')->limit(21)->get();
        if (Agent::isMobile()) {

            return view('wap.product.baoxiangui', compact('list', 'news', 'tj'));
        }
        return view('home.product.baoxiangui', compact('list', 'news', 'tj'));
    }


    public function xiaoyongjiaju()
    {

        $list = Product::where('level1', 60)->orderBy('created_at', 'desc')->get();
        $al = Cases::where('cate_id', 6)->orderBy('created_at', 'desc')->limit(6)->get();
        $news = News::whereType(8)->orderBy('created_at', 'desc')->limit(21)->get();
        return view('home.product.xiaoyongjiaju', compact('list', 'al', 'news'));
    }

    public function tushuguanjiaju()
    {

        $list = Product::where('level2', 84)->orderBy('created_at', 'desc')->get();
        $al = Cases::where('cate_id', 6)->orderBy('created_at', 'desc')->limit(6)->get();
        $news = News::whereType(8)->orderBy('created_at', 'desc')->limit(21)->get();
        if (Agent::isMobile()) {


            return view('wap.product.tushuguanjiaju', compact('list', 'al', 'news'));
        }
        return view('home.product.tushuguanjiaju', compact('list', 'al', 'news'));
    }

    public function syssb()
    {

        $list = Product::where('level2', 83)->orderBy('created_at', 'desc')->get();
        $al = Cases::where('cate_id', 6)->orderBy('created_at', 'desc')->limit(6)->get();
        $news = News::whereType(8)->orderBy('created_at', 'desc')->limit(21)->get();
        return view('home.product.syssb', compact('list', 'al', 'news'));
    }


    public function buxiugang()
    {

        $list = Product::where('level1', 62)->orderBy('created_at', 'desc')->get();

        return view('home.product.buxiugang', compact('list'));
    }


    public function huojia()
    {

        $list = Product::where('level1', 61)->orderBy('created_at', 'desc')->get();
        if (Agent::isMobile()) {

            return view('wap.product.huojia', compact('list'));

        }
        return view('home.product.huojia', compact('list'));
    }

    public function dianzibaomigui()
    {

        $list = Product::where('level1', 63)->orderBy('created_at', 'desc')->get();
        $news = News::whereType(9)->orderBy('created_at', 'desc')->limit(4)->get();
        $al = Cases::where('cate_id', 20)->orderBy('created_at', 'desc')->limit(4)->get();
        if (Agent::isMobile()) {
            return view('wap.product.dianzibaomigui', compact('list', 'news', 'al'));
        }
        return view('home.product.dianzibaomigui', compact('list', 'news', 'al'));
    }


    public function zhinengmijigui()
    {

        $list = Product::where('level1', 65)->orderBy('created_at', 'desc')->get();
        $news = News::whereType(10)->orderBy('created_at', 'desc')->limit(12)->get();

        $al = Cases::where('cate_id', 20)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('home.product.zhinengmijigui', compact('list', 'news', 'al'));
    }


    public function dangangui()
    {
        $list = Cate::with('product')->where('pid', 66)->get();

        //推荐案例
        $tjal = Cases::whereCateId(21)->orderBy('created_at', 'desc')->limit(6)->get();
        //文件柜资讯
        $news = News::whereType(11)->orderBy('created_at', 'desc')->limit(21)->get();
        return view('home.product.dangangui', compact('list', 'tjal', 'news'));
    }

    public function huodongui()
    {

        $list = Product::where('level1', 67)->orderBy('created_at', 'desc')->get();

        return view('home.product.huodonggui', compact('list'));
    }


    public function wenjianguicaigou()
    {

        $list = Product::where('level1', 67)->orderBy('created_at', 'desc')->get();

        return view('home.product.wenjianguicaigou', compact('list'));
    }


    public function MobileQueryList(Request $request)
    {

        if ($request->catId <=8) {
            $list = Product::where('level1',$request->catId)->orderBy('created_at','desc')->get();
        } else {
            $list = Product::where('level2',$request->catId)->orderBy('created_at','desc')->get();
        }
        $str = '';


        foreach ($list as $v) {
            $str .= '<div class="item-wrap">
                <a href="/product/'.$v->id.'" class="item">
                    <img title="'.$v->title.'" src="/uploads/'.$v->images[0].'?width=250&height=250&a.sharpen=2&a.contrast=0.05" />
                    <p class="name">'.$v->title.'</p>
                </a>
            </div>';
        }

        return response(
            [
                'isok' => true,
                'html' => '
<div class="cat-list">
            '.$str.'
 

</div>
    <div class="show-more-btn">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            显示更多
        </button>
    </div>'
            ]
        );
    }
}
