<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/21
 * Time: 21:35
 */

namespace App\Http\Controllers;


use App\AboutImages;
use App\AboutPage;
use App\CaseCate;
use App\Cases;
use App\Cate;
use App\Lunbo;
use Jenssegers\Agent\Facades\Agent;

class HomeController extends Controller
{
    public function index()
    {
        //轮播图
        $lunbo = Lunbo::whereType(0)->get();
        $sjlunbo = Lunbo::whereType(1)->get();

        //产品分类
        $productcate  = Cate::wherePid(0)->whereType(1)->limit(8)->get();
        $productcate =  $productcate->map(function ($v){
           return [
               'name' =>$v->name,
               'list' => Cate::wherePid($v->id)->get(),
           ];
        });
        //产品专题
        $productseries = Cate::wherePid(0)->whereType(2)->get();


        //案例
        $al = CaseCate::with('cases')->whereType(0)->orderBy('created_at','asc')->get();

        $allist = Cases::orderBy('created_at','desc')->limit(14)->get();

        if (Agent::isMobile()) {
            return view('wap.index.index',compact('lunbo','productcate','productseries','al','allist','sjlunbo'));
        }

        return view('home.index.index',compact('lunbo','productcate','productseries','al','allist'));
    }

    public function about()
    {
        //工厂实景
        $gcsj = AboutImages::whereType(1)->orderBy('created_at','desc')->get();
        //生产实力
        $scsl = AboutImages::whereType(2)->orderBy('created_at','desc')->get();
        //荣誉资质
        $ryzz = AboutImages::whereType(3)->orderBy('created_at','desc')->get();
        //公司账号
        $gszh = AboutPage::whereType(1)->first();
        //创始人
        $csr = AboutPage::whereType(2)->first();
        if (Agent::isMobile()) {

            return view('wap.index.about',compact('gcsj','scsl','ryzz','gszh','csr'));

        }

        return view('home.index.about',compact('gcsj','scsl','ryzz','gszh','csr'));
    }


    public function contacts()
    {
        return view('home.index.contact');
    }


    public function zsjm()
    {
        if (Agent::isMobile()) {

            return view('wap.index.zsjm');

        }
        return view('home.index.zsjm');
    }


    public function wenjianguidingzhi()
    {

        return view('home.index.wenjianguidingzhi');
    }
    public function zhaopin()
    {
        $page = AboutPage::whereType(3)->first();

        if (Agent::isMobile()) {
            return view('wap.index.zhaopin',compact('page'));

        }
        return view('home.index.zhaopin',compact('page'));
    }

    public function wenjianguidaijiagong()
    {

        return view('home.index.wenjianguidaijiagong');
    }

    public function wenjianguichukou()
    {

        return view('home.index.wenjianguichukou');
    }
}
