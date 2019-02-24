<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/24
 * Time: 17:00
 */

namespace App\Http\Controllers;


use App\Ggdz;

class GgdzController extends Controller
{
    public function index()
    {

        $list = Ggdz::get();
        return view('home.ggdz.index',compact('list'));
    }
}