@extends('home.common')
@section('title', '公司新闻-花都集团')
@section('body', 'news-page')


@section('content')
    <link href="/home/static/css/news.min.css" rel="stylesheet" type="text/css"/>

    <link href="/home/static/css/module.min.css" rel="stylesheet" type="text/css"/>
    <div class="container-fluid">

        <div class="row module module-1">
            <img src="/home/static/images/ban_news_1.jpg"/>
        </div>

        <div class="container">
            <ol class="breadcrumb hd-breadcrumb">
                <li>
                    <a href="/">花都首页</a>
                </li>
                <li class="active">公司新闻</li>
            </ol>
        </div>

        <div class="row module module-2">
            <div class="container">

                <div class="left">
                    <ul class="news-nav">
                        <li class="static">
                            <p>
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>花都咨询中心
                            </p>
                        </li>
                        <li @if($active==1)class="active"@endif>
                            <a href="/news"><i class="fa fa-paperclip" aria-hidden="true"></i>公司新闻</a>
                            <a href="/news" class="hidden"><i class="fa fa-paperclip" aria-hidden="true"></i>公司新闻</a>
                        </li>
                        <li @if($active==2)class="active"@endif>
                            <a href="/news/industry"><i class="fa fa-paperclip" aria-hidden="true"></i>行业新闻</a>
                            <a href="/news?newsType=2" class="hidden"><i class="fa fa-paperclip" aria-hidden="true"></i>行业新闻</a>
                        </li>
                        <li @if($active==3)class="active"@endif>
                            <a href="/news/question"><i class="fa fa-question-circle-o" aria-hidden="true"></i>常见问题</a>
                            <a href="/news?newsType=3" class="hidden"><i class="fa fa-question-circle-o"
                                                                         aria-hidden="true"></i>常见问题</a>
                        </li>
                    </ul>

                    <ul class="news-nav news-nav-2">
                        <li class="static">
                            <p>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>联系花都
                            </p>
                        </li>
                        <li class=" ">
                            <div>
                                <p>
                                    工厂定制专线：
                                    <span>0379-67509999</span>
                                </p>
                                <p>
                                    全国门店查询及售后：
                                    <span>{{ $sys->tel }}</span>
                                </p>
                                <p>
                                    <a style="border:none; padding:0;font-size:0.7rem; color:inherit;"
                                       href="tencent://Message/?Uin={{ $sys->qq }}&websiteName=花都家具集团=&Menu=yes"><i
                                                style="padding-right:0; font-size:0.7rem;" class="fa fa-qq"
                                                aria-hidden="true"></i>：{{ $sys->qq }}</a>
                                </p>
                                <p>
                                    <i class="fa fa-fax" aria-hidden="true"></i>：0379-67501333
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>：43682086@qq.com
                                </p>
                            </div>

                        </li>
                    </ul>

                </div>

                <div class="right">
                    <div class="news-list">
                        @foreach($list as $k=>$v)
                        <div class="news-box @if($k==0) hot-box @endif  @if($k==1) hot-box @endif">
                            <div class="wrap">
                                <a href="/news/{{ $v->id }}" class="img"><img
                                            src="/uploads/{{ $v->thumb }}"/></a>
                                <div class="text">
                                    <a href="/news/{{ $v->id }}" class="title">{{ $v->title }}</a>
                                    <p class="digest">
                                        {{ $v->desc }}</p>
                                    <p class="date"><a href="/news/{{ $v->id }}">阅读全文</a><span class="right">更新日期：{{ $v->created_at->format('Y-m-d') }}</span>
                                    </p>
                                </div>
                            </div>
                            @if($k==0)<img src="/home/static/images/news_hot1.png"/>@endif
                            @if($k==1)<img src="/home/static/images/news_hot2.png"/>@endif

                        </div>
                        @endforeach
                            <div style="float: left;padding-top: 15px">
                                {{ $list->links() }}
                            </div>



                    </div>

                </div>

                <div class="bottom" style="display:none;">
                    <div class="sm-title">
                        <h2>热点新闻推荐</h2>
                    </div>

                    <ul class="hot-news-list">
                    </ul>
                </div>

                <div class="bottom">
                    <div class="row small-title small-title-2">
                        <p class="cn">热门搜索</p>
                        <p class="line"></p>
                    </div>

                    <div class="row friend-link-box-wrap">
                        <div class="link-box">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection