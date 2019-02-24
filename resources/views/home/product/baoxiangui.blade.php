@extends('home.common')

@section('title', '保险柜_花都保险柜_中国十大保险柜品牌')
@section('body', 'bxg-page')


@section('content')


    <script src="/home/static/js/module.js"></script>

    <link href="/home/static/css/bxg.min.css" rel="stylesheet" type="text/css"/>

    <div class="module" data-id="25d48046-1e03-c2b5-bf12-08d54b94550e" spellcheck="false">
        <div class="container-fluid scroll-pic-1">
            <div class="swiper-container" data-spacebetween="30" data-slidesperview="1" data-effect="slide"
                 data-nextbutton=".swiper-button-next" data-prevbutton=".swiper-button-prev">
                <div class="swiper-wrapper swiperbanner">
                    <div class="swiper-slide">
                        <img src="/home/static/images/636520532710326468.jpg" alt="中国大型保险柜厂家-花都集团"
                             title="中国大型保险柜厂家-花都集团"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/home/static/images/636662932345004585.jpg" alt="花都保险柜-中国十大保险柜品牌"
                             title="花都保险柜-中国十大保险柜品牌"/>
                    </div>


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row" style="margin-top:10px; text-align:center">
            <img src="/home/static/images/t1.jpg"/>
        </div>
        <div class="container">
            <div class="pic-link-wrapper">
                <img src="/home/static/images/2.jpg"/>
                <div>
                    <a href="#qxilie"></a>
                    <a href="#zwxilie"></a>
                    <a href="#kxilie"></a>
                    <a href="#dmxilie"></a>
                    <a href="#jdxilie"></a>
                </div>
            </div>
        </div>
        @foreach($tj as $k=>$v)
            @if($k==0)
                <a href="/product/{{ $v->id }}" class="row" id="qxilie"
                   style="background-image:url(/uploads/{{ $v->images[0] }});background-position:center center; display:block; height:572px;"></a>
            @endif
        @endforeach
        <div class="row" style="background-color:rgb(240,240,240);">
            @foreach($tj as $k=>$v)
                @if($k>0)
                    <div class="container" style="width:1260px;">
                        <div class="col-md-4" style="padding:10px;">
                            <a href="/product/{{ $v->id }}" class="item-col-4">
                                <div class="m-p">
                                    <img src="/uploads/{{ $v->images[0] }}"/>
                                </div>
                                <div class="l-p">
                                    <img src="/home/static/images/4.png"/>
                                    <p>{{ $v->tag }}</p>
                                </div>
                                <div class="text">
                                    <p class="name">{{ $v->title }}</p>
                                    <p class="price-box">
                                        <span style="visibility:hidden;" class="price"><img
                                                    src="/home/static/images/5.png"/></span>
                                        <span class="bubble-btn">查看详情</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @foreach($list as $v)
                        <div class="row" id="zwxilie" style="margin-top:10px; text-align:center">
                            <a href="#"><img src="/uploads/{{ $v->image }}"/></a>
                        </div>

                        <div class="container" style="">
                            @foreach($v->product as $vi)
                                <div class="col-md-4" style="padding:10px;">
                                    <a href="/product/{{ $vi->id }}" class="item-col-4">
                                        <div class="m-p">
                                            <img src="/uploads/{{ $vi->images[0] }}"/>
                                        </div>
                                        <div class="l-p">
                                            <img src="/home/static/images/4.png"/>
                                            <p>{{ $vi->tag }}</p>
                                        </div>
                                        <div class="text">
                                            <p class="name">{{ $vi->title }}</p>
                                            <p class="price-box">
                                                <span style="visibility:hidden;" class="price"><img
                                                            src="/home/static/images/5.png"/>{{ $vi->desc }}</span>
                                                <span class="bubble-btn">查看详情</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach


        </div>

        <div class="row">
            <div class="container" style="padding-top:2rem;">
                <div class="module">
                    <div class="container news-style-3">
                        <div class="t1">
                            <div>
                                <p>企业<span>新闻</span></p>
                                <a class="more-link" href="/news">更多<span>+</span></a>
                            </div>
                        </div>
                        <div class="t2 data-module caseornews" style="padding-bottom:1.5rem;">

                            <div class="swiper-container swiper-news-2" data-slidesPerColumn="3" data-effect='slide'
                                 data-roundlengths="true" data-autoplay="4000" data-mousestop="true">
                                <div class="swiper-wrapper">


                                    @foreach($news as $v)
                                        <div class="swiper-slide row" data-tag="{{ $v->title }}">
                                            <div class="col-md-2">
                                                <a href="/news/{{ $v->id }}" class="wrap">
                                                    <img src="/uploads/{{ $v->thumb }}">
                                                </a>
                                            </div>
                                            <div class="col-md-10">
                                                <a href="/news/{{ $v->id }}" class="wrap">
                                                    <h3>{{ $v->title }}</h3>
                                                    <p class="p1">
                                                        {{ $v->desc }}</p>
                                                    <p class="p2">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 发布时间：{{ $v->created_at }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection