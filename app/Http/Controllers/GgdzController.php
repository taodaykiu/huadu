<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 17:00
 */

namespace App\Http\Controllers;


use App\Ggdz;
use Jenssegers\Agent\Facades\Agent;

class GgdzController extends Controller
{
    public function index()
    {

        $list = Ggdz::get();
        if (Agent::isMobile()) {

            return view('wap.ggdz.index',compact('list'));

        }
        return view('home.ggdz.index',compact('list'));
    }
}
