@extends('wap.common')
@section('title', '文件柜|密集架|档案柜厂家,专业定制钢制文件柜厂家-花都集团')
@section('body', 'home-page')


@section('content')
    <main id="main" class="mdl-layout__content">
        <div class="page-content">
            <div class="swiper-container swiper-home" data-effect="slide" data-roundlengths="true" data-pagination=".swiper-pagination" data-autoplay="4000" data-mousestop="true">
                <div class="swiper-wrapper">
                    @foreach($sjlunbo as $v)

                        <div class="swiper-slide"><img src="/uploads/{{ $v->image }}" /></div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="thin-line-wrap customer-type-warp">
                <div class="flex">
                    <a href="javascript:void(0)" class="customer-type-item">
                        <div class="icon">
                            <i class="alifont hd-purchase"></i>
                        </div>
                        <p class="text">在线采购</p>
                    </a>
                    <a data-href="javascript:void(0)" class="customer-type-item">
                        <div class="icon">
                            <i class="alifont hd-23"></i>
                        </div>
                        <p class="text">招投标支持</p>
                    </a>
                    <a href="javascript:void(0)" class="customer-type-item">
                        <div class="icon">
                            <i class="alifont hd-OEMODMOBMdaigong"></i>
                        </div>
                        <p class="text">工程定制</p>
                    </a>
                    <a data-href="javascript:void(0)" class="customer-type-item">
                        <div class="icon">
                            <i class="alifont hd-wuziwaimao"></i>
                        </div>
                        <p class="text">外贸出口</p>
                    </a>
                </div>
            </div>

            <div class="title-panel-box" style="display:none;">
                <div class="title">
                    <p>产品专题
                        <small style="font-size:10px;padding-left:8px;color:#777777;">PRODUCT SERIES</small>
                    </p>
                </div>
                <div class="content">
                    <div class="orientation-scroll-box">
                        <ul class="wrap">

                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>文件柜</p>
                                <a href="/wenjiangui" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>保险柜</p>
                                <a href="/baoxiangui" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>更衣柜</p>
                                <a href="/gengyigui" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>档案密集架</p>
                                <a href="/mijijia" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>部队营具</p>
                                <a href="/buduiyingju" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>校用家具</p>
                                <a href="/mijijia" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>货架</p>
                                <a href="/huojia" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>不锈钢柜</p>
                                <a href="/buxiugang" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>电子保密柜</p>
                                <a href="/dianzibaomigui" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>
                            <li>
                                <div class="icon"><i class="alifont hd-guizi"></i></div>
                                <p>图书馆家具</p>
                                <a href="/tushuguanjiaju" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                    进入专题
                                </a>
                            </li>


                        </ul>
                    </div>

                </div>
            </div>

            <div class="title-wrap">
                <p><span class="ch">产品中心</span><br/><span class="en">PRODUCT CENTER</span></p>
            </div>

            <div class="panel-box home-product-box">

                <div class="flex product-nav-wrap">
                    <ul class="product-nav">

                        @foreach($productcate as $k=>$v)
                            <li class="item @if($k==0) active @endif">
                                <a href="#product-cat-{{ $k }}" data-toggle="tab">
                                    <div class="icon icon-{{ $k + 1 }}"></div>
                                    <span>{{ $v['name']  }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="line"></div>

                <div class="tab-content">

                    @foreach($productcate as $k=>$v)

                        <div class="tab-pane cat @if($k==0)active @endif" id="product-cat-{{ $k }}">
                            <div class="cat-list">
                                @foreach($v['list'] as $vi)
                                    <div class="item-wrap">
                                        <a href="/ganggui/{{ $vi['id'] }}" class="item">
                                            <img class="lazyload" alt="{{ $vi['name'] }}" title="{{ $vi['name'] }}"
                                                 src="/uploads/{{ $vi['image'] }}"
                                                 data-src="/uploads/{{ $vi['image'] }}"/>
                                            <p class="name">{{ $vi['name'] }}</p>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <script>
                jQuery(document).ready(function ($) {

                    return;

                    //滚动监听
                    var $productBox = $('.home-product-box');
                    var $navWrap = $('.product-nav-wrap');
                    var $productNav = $navWrap.find('.product-nav');
                    var $etc = $navWrap.find('>span');

                    setTimeout(function () {
                        $productNav.on('scroll', $.throttle(100, false, function () {

                            var sl = $productNav.scrollLeft();
                            if (sl > 3) {
                                $etc.hide();
                            } else {
                                $etc.show();
                            }

                        }, false));

                        //滚动监听
                        var $main = $('#main');
                        var boxPosTop = $productBox.position().top + $main.scrollTop() + 20;

                        $main.on('scroll', function () {

                            var boxTop = $productBox.position().top;
                            var boxHeight = $productBox.height();

                            if (boxTop < 1 && boxTop > -1 * boxHeight) {
                                $productBox.addClass('fixed');
                            } else {
                                $productBox.removeClass('fixed');
                            }

                        });

                        //切换时滚动到产品中心顶端
                        $productNav.find('li a').on('shown.bs.tab', function (e) {

                            if ($main.scrollTop() > boxPosTop) {
                                $main.animate({ 'scrollTop': boxPosTop + 'px' });
                            }

                        });


                    }, 5000);

                });
            </script>

            <div class="title-panel-box">
                <div class="title">
                    <p>我们的优势</p>
                </div>
                <div class="content">
                    <div class="our-youshi">
                        <ul>
                            <li>
                                <div class="border border-1">
                                    <div class="left left-1">
                                        <h3>27年大品牌</h3>
                                        <p>河南商标</p>
                                        <span>01</span>
                                    </div>
                                    <div class="right">
                                        <p>先后荣获众多国家级专利及荣誉<br/>国际一线品牌长期供应商<br/>中国钢制家具优质品牌</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border border-2">
                                    <div class="left left-2">
                                        <h3>快速批量生产</h3>
                                        <p>标准化严格品控</p>
                                        <span>02</span>
                                    </div>
                                    <div class="right">
                                        <p>智能化车间，全自动流水线<br/>月产钢柜30万件，严格品控<br/>每一台产品都是标准化</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border border-3">
                                    <div class="left left-3">
                                        <h3>工程服务更专业</h3>
                                        <p>上万工程承接经验</p>
                                        <span>03</span>
                                    </div>
                                    <div class="right">
                                        <p>专业经验工程团队全面服务<br/>专业制作配套方案，免费设计<br/>资质健全，全面招投标支持</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="border border-4">
                                    <div class="left left-4">
                                        <h3>全球销量见证</h3>
                                        <p>全球130万花都用户</p>
                                        <span>04</span>
                                    </div>
                                    <div class="right">
                                        <p>全国销售网络，完善的线下服务<br/>15年外贸经验，产品热销欧美<br/>销售额出口额连续五年业内领先</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="title-wrap">
                <p><span class="ch">案例<span style="font-size:16px; padding:0 5px;">&</span> 新闻</span><br/><span class="en">CASE & NEWS</span></p>
            </div>

            <div class="panel-box home-news-box">

                <ul class="news-nav flex">
                    <li class="active"><a href="#case-box-1" data-toggle="tab">工程案例</a></li>
                    <li><a href="#news-box-1" data-toggle="tab">公司新闻</a></li>
                </ul>

                <div class="tab-content news-list">
                    <div class="tab-pane cat cat-0 active" id="case-box-1">

                        <div class="panel-box home-case-box">
                            <div class="flex">
                                <div class="now-case-txt">
                                    <img src="/wap/static/images/no-case.png"/>
                                </div>

                                <div class="swiper-container swiper-case swiper-container-vertical" data-direction="vertical" data-effect="slide" data-roundlengths="true" data-autoplay="3000" data-mousestop="true">
                                    <div class="swiper-wrapper">


                                        @foreach($allist as $ki=>$vi)
                                            @if($ki<=5)

                                                <div class="swiper-slide">
                                                    <a href="/case/{{ $vi->id }}">
                                                        <div class="img"><img src="/uploads/{{ $vi->thumb }}"/></div>
                                                        <div class="txt">
                                                            <p class="r1">{{ $vi->title }}</p>
                                                            <p class="r2">{{ $vi->created_at->format('Y-m-d') }}</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-panel-box home-case-panel">

                            <ul class="tab-button-group">
                                <li class="active"><a href="#case-cat-99" data-toggle="tab">全部</a></li>

                                @foreach($al as $v)
                                    <li>
                                        <a href="#case-cat-{{ $v->id }}" data-toggle="tab">{{ $v->name }}</a>
                                    </li>
                                @endforeach
                            </ul>


                            <div class="tab-content case-tab-content">
                                @foreach($al as $k=>$v)
                                <div class="tab-pane @if($k==0) active @endif in cat" id="case-cat-{{ $v->id }}">
                                    <div class="cat-list">
                                        @foreach($v->cases as $ki=>$vi)
                                        <div class="item">
                                            <a href="/case/{{ $vi->id }}" title="{{ $vi->title }}">
                                                <div class="img">
                                                    <img class="header-img" src="/uploads/{{ $vi->thumb }}"/>

                                                    <!--<img src="/wap/static/images/636835096982258439.png" />-->
                                                </div>
                                                <div class="text">
                                                    <p class="r1">{{ $vi->title }}</p>
                                                    <p class="r2">{{ $vi->created_at->format('Y-m-d') }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="more arrow-row">
                                            <a class="" href="/case">
                                                <div class="left">了解更多案例</div>
                                                <span class="arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                    <ul class="tab-pane cat cat-1" id="news-box-1">
                        @foreach(\App\News::where('is_hot',1)->orderBy('created_at','desc')->get() as $k=>$v)
                            @if($k<=20)
                        <li>
                            <a class="link flex" href="/news/{{ $v->id }}">
                                <div class="d1">
                                    <p class="r1">{{ $v->title }}</p>
                                    <p class="r2"><span></span><span>{{ $v->created_at->format('Y-m-d') }}</span></p>
                                </div>
                                <div class="d2"><img src="/uploads/{{ $v->thumb }}"/></div>
                            </a>
                            <i class="line"></i>
                        </li>
                            @endif
                        @endforeach
                        <li>
                            <div class="more arrow-row">
                                <a class="" href="/news">
                                    <div class="left">查看更多新闻</div>
                                    <span class="arrow-right"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="title-wrap title-wrap-a">
                <p><span class="l">代言钢制家具</span><span class="r">彰显中国制造</span></p>
            </div>

            <div class="panel-box home-guoji-box">
                <div class="swiper-container swiper-guoji" data-effect="fade" data-roundlengths="true" data-autoplay="3000" data-mousestop="true">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cl">
                                <img src="/wap/static/images/636377174648573343.jpg"/>
                            </div>
                            <div class="cr">
                                <h2>第121届中国进出口商品交易会落下帷幕</h2>
                                <h2>花都集团千万订单圆满收官</h2>
                                <p>自2003年起，花都集团已陪伴广交会13个春秋，用优质的产品赢得了国内外客商的喜爱，成为中国钢制家具的一张名片。作为钢制家具的领头者，花都坚持品质，坚持产品研发和革新，以做最好的中国制造为己任</p>
                                <a href="javascript:void(0)" class="more">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="cl">
                                <img src="/wap/static/images/636377174653623632.jpg"/>
                            </div>
                            <div class="cr">
                                <h2>花都钢柜走进里约奥运会</h2>
                                <h2>各大媒体相继报道</h2>
                                <p>继蚊帐，拔火罐等中国元素后，中国洛阳制造的花都钢制更衣柜、花都办公文件柜再次获里约奥运会各国运动员点赞！里约热内卢是奥运史上首个主办奥运会的南美洲城市，同时也是首个主办奥运会的葡萄牙语城市</p>
                                <a href="javascript:void(0)" class="more">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="cl">
                                <img src="/wap/static/images/636377174643433049.jpg"/>
                            </div>
                            <div class="cr">
                                <h2>花都惊艳米兰世博会</h2>
                                <h2>代言钢制办公家具</h2>
                                <p>洛阳花都家具集团代表行业率先入选米兰世博，向世界展示了中国钢制办公家具的定制力量。在世霁级的舞台，完成了中国品牌的国际展现，获得了来自世界的喝彩。</p>
                                <a href="javascript:void(0)" class="more">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-box home-bt-pic-box">
                <div class="scrollpic">
                    <img src="/wap/static/images/full-company.jpg"/>
                </div>
                <div class="about-desc-box">
                    <div class="top-img" style="display:none;">
                        <div class="blue-box">
                            <img src="/wap/static/images/logo_min2.png"/>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>走进花都<br/><span>About Huadu</span></h3>
                        <p>洛阳花都家具集团有限公司创建于1992年，注册资金1.006亿，是20余年的创业大品牌，致力于现代化钢制家具的生产与销售。数十年来，经过无数用户对产品的检验与认可，洛阳花都已成为钢制办公家具行业里的口碑名牌！先后荣获“河南名牌产品”、“河南省国际知名名牌”、“河南省著名商标”、“河南省百强企业” 等荣誉称号。企业率先通过了ISO9001/ISO14001和OSHAS18001认证及国际3C认证，十环认证和出口欧盟CE认证。销售额、纳税额、出口额三项指标连续多年位居同行业。</p>
                        <div class="align-center">
                            <a href="/about" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                                了解花都
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                jQuery(document).ready(function ($) {

                    //走进花都下拉
                    $('.swiper-guoji').on('click', '.more', function (e) {

                        $(this).closest('.swiper-wrapper').find('.cr p').addClass('active');
                        $(this).closest('.swiper-wrapper').find('.cr .more').hide();
                    });

                });
            </script>


            @include('wap.right')
        </div>
    </main>


@endsection