@extends('home.common')
@section('title', '文件柜|密集架|档案柜厂家,专业定制钢制文件柜厂家-花都集团')
@section('body', 'home-page')


@section('content')
    <link href="home/static/css/home.min.css" rel="stylesheet" type="text/css"/>
    <!--Home Swiper-->
    <div class="container-fluid">
        <div class="swiper-container swiper-home" data-effect="slide" data-roundlengths="true"
             data-pagination=".swiper-pagination" data-autoplay="4000" data-mousestop="true">
            <div class="swiper-wrapper">
                @foreach($lunbo as $v)
                    <div class="swiper-slide">
                        <a href="{{ $v->url }}">
                            <img class="lazyload" src="/uploads/{{ $v->image }}" data-src="/uploads/{{ $v->image }}"/>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function ($) {

            $(window).resize(function (e) {

                var offsetLeft = (1920 - $(this).width()) / 2;

                $('.swiper-home img').css('marginLeft', (-1 * offsetLeft) + 'px');

            });

        });
    </script>

    <!--Home Body-->
    <div class="container-fluid">

        <div class="row module module-1">
            <div class="container">
                <div class="row big-title">
                    <p class="cn">客户直通车</p>
                    <p class="en">CUSTOMER SERVICE</p>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <a href="/wenjianguicaigou" title="花都办公家具单位采购">
                            <div class="icon">
                                <div class="wrap">
                                    <img class="lazyload" src="home/static/images/ztc_ico1.jpg"
                                         data-src="home/static/images/ztc_ico1.jpg"/>
                                    <div class="hover-link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="text">
                                <p class="tt">单位采购</p>
                                <p class="desc">厂家直购，档案柜、密集架等钢制办公家具全系列定制。售前售后五星服务，全国用户口碑保障。</p>
                                <p class="more">查看更多</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="/wenjianguidingzhi" style="display:none;">花都办公家具招投标支持</a>
                        <a href="/ggdz" title="花都办公家具招投标支持">
                            <div class="icon">
                                <div class="wrap">
                                    <img class="lazyload" src="home/static/images/ztc_ico2.jpg"
                                         data-src="home/static/images/ztc_ico2.jpg"/>
                                    <div class="hover-link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="line"></div>
                            <div class="text">
                                <p class="tt">项目工程</p>
                                <p class="desc">资质健全，丰富的工程案例，花都郑州营销中心档案柜、密集架、文件柜、公寓床专项团队全程服务。</p>
                                <p class="more">查看更多</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="/wenjianguidaijiagong" title="花都办公家具OEM/ODM定制">
                            <div class="icon">
                                <div class="wrap">
                                    <img class="lazyload" src="home/static/images/ztc_ico3.jpg"
                                         data-src="home/static/images/ztc_ico3.jpg"/>
                                    <div class="hover-link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="text">
                                <p class="tt">加工定制</p>
                                <p class="desc">大型流水线车间，超大生产力。生产总部专业设计研发团队，先进的档案柜自动化生产设备。</p>
                                <p class="more">查看更多</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="/wenjianguichukou" title="花都办公家具外贸公司">
                            <div class="icon">
                                <div class="wrap">
                                    <img class="lazyload" src="home/static/images/ztc_ico4.jpg"
                                         data-src="home/static/images/ztc_ico4.jpg"/>
                                    <div class="hover-link">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="text">
                                <p class="tt">外贸合作</p>
                                <p class="desc">16年外贸经验，经历无数客户验厂，独特设计的档案柜拆装结构，荣获科技小巨人企业</p>
                                <p class="more">查看更多</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row module module-2">
            <div class="container">
                <div class="row big-title">
                    <p class="cn">产品专题</p>
                    <p class="en">PRODUCT SERIES</p>
                </div>

                <div class="row category-list-box">
                    <div class="lt">
                        <div class="content swiper-container swiper-catlist" data-effect='fade'
                             data-touchreleaseonedges="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="lazyload" alt="花都文件柜" title="花都文件柜"
                                         src="home/static/images/636440217859561420.jpg"
                                         data-src="home/static/images/636440217859561420.jpg?width=451&height=352&a.sharpen=1"/>
                                </div>
                                <div class="swiper-slide">
                                    <img class="lazyload" alt="花都保密柜" title="花都保密柜"
                                         src="home/static/images/636440218742051710.jpg"
                                         data-src="home/static/images/636440218742051710.jpg?width=451&height=352&a.sharpen=1"/>
                                </div>
                                <div class="swiper-slide">
                                    <img class="lazyload" alt="花都密集架" title="花都密集架"
                                         src="home/static/images/636440219028087521.jpg"
                                         data-src="home/static/images/636440219028087521.jpg?width=451&height=352&a.sharpen=1"/>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="rt">
                        <ul>
                            @foreach($productseries as $k=>$v)
                                <li @if($k>4) class="more" @endif>
                                    <a target="_blank" href="/{{ $v->url  }}" class="c{{ ceil($k%7) }}">
                                        <p class="bk"></p>
                                        <p>{{ $v->name }}系列</p>
                                        <p>
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <a href="/ganggui" class="c6">
                                    <p>更多</p>
                                    <p>
                                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row big-title" style="margin-top:3rem;">
                    <p class="cn">产品中心</p>
                    <p class="en">PRODUCT CENTER</p>
                </div>

                <div class="row product-list-box" style="padding-bottom:1rem;">

                    <div class="tab-content list-box">
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
                    <div class="list-nav">
                        <div class="lbk"></div>
                        <ul class="list" data-over-show-tab="true">
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
                </div>


                <div class="hz" style="display:none;">
                    <div class="hz-lt">
                        <div class="f1">
                            <p class="icon">
                                <i class="icon alifont hd-guizi"></i>
                            </p>
                            <p>快速打样</p>
                        </div>
                        <div class="f2">
                            <p class="icon">
                                <i class="icon alifont hd-sheji"></i>
                            </p>
                            <p>工程定制</p>
                        </div>
                    </div>
                    <div class="hz-ct">
                        <p>全国咨询热线：{{ $sys->tel }}</p>
                    </div>

                    <div class="hz-rt">
                        <a href="/ggdz" class="link1 sq-call" data-msg-id="1">定制咨询</a>
                        <a href="/ggdz" class="link2">进入定制专区 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="row ad-box" style="display:none;">
                    <p>全国咨询热线：{{ $sys->tel }}</p>
                    <a href="#" class="sq-call link3" data-msg-id="2">立即咨询 <i class="fa fa-angle-right"
                                                                              aria-hidden="true"></i></a>
                </div>

            </div>
        </div>

        <script>
            jQuery(document).ready(function ($) {
                $('.category-list-box .c6').on('click', function (e) {
                    e.preventDefault();
                    var that = this;
                    $(this).closest('ul').find('.more').fadeToggle(300, function () {
                        if ($(that).find('i').hasClass('fa-angle-double-down')) {
                            $(that).find('i').removeClass('fa-angle-double-down').addClass('fa-angle-double-up');
                        } else {
                            $(that).find('i').removeClass('fa-angle-double-up').addClass('fa-angle-double-down');
                        }
                    });
                });
            });
        </script>

        <div class="row module module-3">
            <div class="container">
                <div class="row big-title">
                    <p class="cn">我们的优势</p>
                    <p class="en">OUR ADVANTAGES</p>
                </div>

                <div class="row ys-box">
                    <div class="cl"><p>品牌保障</p>
                        <h3>相信品牌 选择实力</h3>
                        <ul>
                            <li><span style="font-family: 'Microsoft Yahei'; font-size: 16px;">2007 年获评中国驰名商标</span>
                            </li>
                            <li>
                                <span style="font-family: 'Microsoft Yahei'; font-size: 16px;">2013 年获评国际知名品牌、名牌产品</span>
                            </li>
                            <li>
                                <span style="font-family: 'Microsoft Yahei'; font-size: 16px;">2014 年获评科技型企业、著名商标</span>
                            </li>
                            <li><span style="font-family: 'Microsoft Yahei'; font-size: 16px;">2018 年获评国家级科技型企业、市钢制家具技术研究中心</span>
                            </li>
                        </ul>
                    </div>
                    <div class="cr"><img class="lazyload" title="花都集团荣誉资质" src="home/static/images/11jj.jpg"
                                         alt="花都集团荣誉资质"
                                         data-src="home/static/images/11jj.jpg?width=507&amp;a.sharpen=1"/></div>
                </div>
                <div class="row ys-box">
                    <div class="cr"><img class="lazyload" title="文件柜生产线" src="home/static/images/12.jpg" alt="文件柜生产线"
                                         data-src="home/static/images/12.jpg?width=507&amp;a.sharpen=1"/></div>
                    <div class="cl"><p>品质保证</p>
                        <h3>花都工厂 坚持只做优质钢柜</h3>
                        <ul>
                            <li>大型自动化流水线车间，各个环节严格把关，产能保障</li>
                            <li>自主研发业内先进大型喷涂线，涂层牢固，不脱不锈，美观保障</li>
                            <li>花都文件柜27年打磨做工工艺，严格品控，做工细节保障</li>
                        </ul>
                    </div>
                </div>
                <div class="row ys-box">
                    <div class="cl"><p>工程采购</p>
                        <h3>资质健全 丰富的工程承接经验</h3>
                        <ul>
                            <li>花都集团资质健全，上万工程承接经验，高中标率。</li>
                            <li>专业工程团队全面服务，快速响应，激光切割机快速打样。</li>
                            <li>免费制作文件柜、密集架配套方案，免费预算，专业设计。</li>
                        </ul>
                    </div>
                    <div class="cr"><img src="home/static/images/636680254212554496.jpg"/></div>
                </div>
                <div class="row ys-box">
                    <div class="cr"><img src="home/static/images/636680253001282771.jpg"/></div>
                    <div class="cl"><p>销量见证</p>
                        <h3>销量见证 全球用户口碑保障</h3>
                        <ul>
                            <li>全国销售网络，完善的线下体验和服务</li>
                            <li>16年外贸经验，档案柜出口数十个国家</li>
                            <li>销售额、纳税额、出口额连年名列前茅</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row module module-4">
            <div class="container" style="padding-bottom:2rem;">
                <div class="row big-title">
                    <p class="cn">工程案例</p>
                    <p class="en">PROJECT CASE</p>
                </div>

                <div class="row case-nav-wrap">
                    <ul class="case-nav" data-over-show-tab="true">
                        <li class="active">
                            <a href="#case-cat-99" data-toggle="tab">全部</a>
                        </li>
                        @foreach($al as $v)
                            <li>
                                <a href="#case-cat-{{ $v->id }}" data-toggle="tab">{{ $v->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="row case-list-wrap">
                    <div class="tab-content case-list">
                        <div class="tab-pane active in cat" id="case-cat-99">

                            <div class="cat-list-l">
                                @foreach($allist as $ki=>$vi)
                                    @if($ki<=5)
                                        <div class="item">
                                            <a href="/case/{{ $vi->id }}" title="{{ $vi->title }}">
                                                <div class="img"><img src="/uploads/{{ $vi->thumb }}"/></div>
                                                <div class="text"><p>{{ $vi->title }}</p></div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="cat-list-r">
                                <p class="top"><i class="fa fa-clock-o" aria-hidden="true"></i><span>花都正在发生</span>
                                </p>
                                <ul class="now-list">
                                    @foreach($allist as $ki=>$vi)
                                        @if($ki>5)
                                            <li class="item">
                                                <a href="/case/{{ $vi->id }}" title="{{ $vi->title }}"><img
                                                            src="/uploads/{{ $vi->thumb }}"/>
                                                    <span class="title textover">{{ $vi->title }}<span
                                                                class="date">{{ $vi->created_at->format('Y-m-d') }}</span></span></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @foreach($al as $v)
                            <div class="tab-pane cat" id="case-cat-{{ $v->id }}">
                                <div class="cat-list-l">
                                    @foreach($v->cases as $ki=>$vi)
                                        @if($ki<=5)
                                            <div class="item">
                                                <a href="/case/{{ $vi->id }}" title="{{ $vi->title }}">
                                                    <div class="img"><img src="/uploads/{{ $vi->thumb }}"/></div>
                                                    <div class="text"><p>{{ $vi->title }}</p></div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="cat-list-r">
                                    <p class="top"><i class="fa fa-clock-o" aria-hidden="true"></i><span>花都正在发生</span>
                                    </p>
                                    <ul class="now-list">
                                        @foreach($v->cases as $ki=>$vi)
                                            @if($ki>5)
                                                <li class="item">
                                                    <a href="/case/{{ $vi->id }}" title="{{ $vi->title }}"><img
                                                                src="/uploads/{{ $vi->thumb }}"/>
                                                        <span class="title textover">{{ $vi->title }}<span
                                                                    class="date">{{ $vi->created_at->format('Y-m-d') }}</span></span></a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function ($) {

                /* $(".case-nav-wrap .case-nav").on("mouseenter", "li", function (e) {

                 $(this).parent().find("a").on("bs.")

                 $(this).find("a").tab("show");
                 });
                 */
            });
        </script>

        <div class="row module module-5">
            <div class="container">
                <div class="row big-title">
                    <p class="cn">新闻资讯</p>
                    <p class="en">COMPANY NEWS</p>
                </div>

                <div class="row content">
                    <div class="left-box">

                        <div class="swiper-container swiper-xwzx" data-effect='fade'>
                            <div class="swiper-wrapper">
                                @foreach(\App\News::where('is_hot',1)->orderBy('created_at','desc')->get() as $k=>$v)
                                    @if($k<=20)
                                <div class="swiper-slide" data-tag="16">
                                    <div class="box">
                                        <div class="cl">
                                            <img class="lazyload" title="{{ $v->title }}"
                                                 src="home/static/images/636698325280486840.png"
                                                 data-src="/uploads/{{ $v->thumb }}"/>
                                        </div>
                                        <div class="cr">
                                            <h4>{{ $v->title }}</h4>
                                            <p>{{ $v->desc }}</p>
                                            <a href="/news/{{ $v->id }}">查看详情</a>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <div class="right-box">
                        <ul class="news-nav">
                            <li class="active">
                                <a href="#news-cat-0" data-toggle="tab">公司新闻</a>
                            </li>
                            <li>
                                <a href="#news-cat-1" data-toggle="tab">行业新闻</a>
                            </li>
                            <li>
                                <a href="#news-cat-2" data-toggle="tab">常见问题</a>
                            </li>
                        </ul>
                        <div class="news-list-wrap">
                            <div class="tab-content news-list">
                                <ul class="tab-pane active cat cat-1" id="news-cat-0">
                                    @foreach(\App\News::where('type',1)->orderBy('created_at','desc')->get() as $k=>$v)
                                        @if($k<=6)
                                    <li>
                                        <a class="link" title="{{ $v->title }}" href="/news/{{ $v->id }}"><i
                                                    class="fa fa-link" aria-hidden="true"></i><span>{{ $v->title }}</span></a>
                                    </li>
                                        @endif
                                        @endforeach
                                </ul>
                                <ul class="tab-pane cat cat-1" id="news-cat-1">
                                    @foreach(\App\News::where('type',2)->orderBy('created_at','desc')->get() as $k=>$v)
                                        @if($k<=6)
                                            <li>
                                                <a class="link" title="{{ $v->title }}" href="/news/{{ $v->id }}"><i
                                                            class="fa fa-link" aria-hidden="true"></i><span>{{ $v->title }}</span></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <ul class="tab-pane cat cat-1" id="news-cat-2">
                                    @foreach(\App\News::where('type',3)->orderBy('created_at','desc')->get() as $k=>$v)
                                        @if($k<=6)
                                            <li>
                                                <a class="link" title="{{ $v->title }}" href="/news/{{ $v->id }}"><i
                                                            class="fa fa-link" aria-hidden="true"></i><span>{{ $v->title }}</span></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="/news" class="more-link">更多新闻</a>
                    </div>
                </div>

            </div>
        </div>

        <script>
            jQuery(document).ready(function ($) {
                $('.news-nav').on('mouseenter', 'li', function (e) {

                    if ($(this).hasClass('active')) {
                        return;
                    }

                    $(this).find('a').click();
                });

            });
        </script>

        <div class="row module module-6">
            <div class="container">

                <div class="row head">
                    <div class="img">
                        <img class="lazyload" style="position:relative; left:20px;" src="home/static/images/222.png"
                             data-src="home/static/images/222.png" alt="花都集团：27年打造钢柜行业典范" title="花都集团：27年打造钢柜行业典范"/>
                    </div>
                </div>

                <div class="row content" style="margin-bottom:30px;">
                    <div class="swiper-container swiper-zjhd" data-spacebetween="30" data-slidesperview="3"
                         data-effect="slide" data-nextbutton=".swiper-button-next"
                         data-prevbutton=".swiper-button-prev">
                        <div class="swiper-wrapper">
                            @foreach(\App\Ggdz::orderBy('created_at','desc')->get() as $v)
                            <div class="swiper-slide">
                                <img class="lazyload" title="{{ $v->name }}" src="home/static/images/636396219712010929.jpg"
                                     data-src="/uploads/{{ $v->image }}"/>
                                <div style="padding:15px; background-color:#EEEEEE; text-align:center;">{{ $v->name }}</div>
                            </div>
                             @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>

            <div class="container-fluid" style="margin-top:6rem;display:none;">
                <div class="row huadu-national">
                    <div class="logo-box-1">
                        <div class="wrap">
                            <p style="font-weight:bold;">花都</p>
                            <p style="font-weight:bold;">国际</p>
                        </div>
                    </div>
                    <div class="pf2">
                        <p>
                            <span class="r1">代言钢制家具</span>
                            <span class="r2">彰显中国制造</span>
                        </p>
                    </div>
                    <div class="content swiper-container swiper-hdgj" data-effect='fade'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cl">
                                    <img class="lazyload" title="第121届中国进出口商品交易会，花都集团千万订单圆满收官"
                                         alt="&lt;h2&gt;第121届中国进出口商品交易会落下帷幕&lt;/h2&gt;
&lt;h2&gt;花都集团千万订单圆满收官&lt;/h2&gt;
&lt;p&gt;自2003年起，花都集团已陪伴广交会13个春秋，用优质的产品赢得了国内外客商的喜爱，成为中国钢制家具的一张名片。作为钢制家具的领头者，花都坚持品质，坚持产品研发和革新，以做最好的中国制造为己任&lt;/p&gt;"
                                         src="home/static/images/636377174648573343.jpg"
                                         data-src="home/static/images/636377174648573343.jpg"/>
                                </div>
                                <div class="cr">
                                    <div class="desc">
                                        <h2>第121届中国进出口商品交易会落下帷幕</h2>
                                        <h2>花都集团千万订单圆满收官</h2>
                                        <p>
                                            自2003年起，花都集团已陪伴广交会13个春秋，用优质的产品赢得了国内外客商的喜爱，成为中国钢制家具的一张名片。作为钢制家具的领头者，花都坚持品质，坚持产品研发和革新，以做最好的中国制造为己任</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cl">
                                    <img class="lazyload" title="花都钢柜走进里约奥运会，各大媒体相继报道"
                                         alt="&lt;h2&gt;花都钢柜走进里约奥运会&lt;/h2&gt;&lt;h2&gt;各大媒体相继报道&lt;/h2&gt;&lt;p&gt;继蚊帐，拔火罐等中国元素后，中国制造的花都钢制更衣柜、花都办公文件柜再次获里约奥运会各国运动员点赞！里约热内卢是奥运史上首个主办奥运会的南美洲城市，同时也是首个主办奥运会的葡萄牙语城市&lt;/p&gt;"
                                         src="home/static/images/636377174653623632.jpg"
                                         data-src="home/static/images/636377174653623632.jpg"/>
                                </div>
                                <div class="cr">
                                    <div class="desc">
                                        <h2>花都钢柜走进里约奥运会</h2>
                                        <h2>各大媒体相继报道</h2>
                                        <p>
                                            继蚊帐，拔火罐等中国元素后，中国制造的花都钢制更衣柜、花都办公文件柜再次获里约奥运会各国运动员点赞！里约热内卢是奥运史上首个主办奥运会的南美洲城市，同时也是首个主办奥运会的葡萄牙语城市</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cl">
                                    <img class="lazyload" title="花都惊艳亮相米兰世博会，代言钢制办公家具"
                                         alt="&lt;h2&gt;花都惊艳米兰世博会&lt;/h2&gt;&lt;h2&gt;代言钢制办公家具&lt;/h2&gt;&lt;p&gt;花都家具集团代表行业率先入选米兰世博，向世界展示了中国钢制办公家具的定制力量。在世霁级的舞台，完成了中国品牌的国际展现，获得了来自世界的喝彩。&lt;/p&gt;"
                                         src="home/static/images/636377174643433049.jpg"
                                         data-src="home/static/images/636377174643433049.jpg"/>
                                </div>
                                <div class="cr">
                                    <div class="desc">
                                        <h2>花都惊艳米兰世博会</h2>
                                        <h2>代言钢制办公家具</h2>
                                        <p>花都家具集团代表行业率先入选米兰世博，向世界展示了中国钢制办公家具的定制力量。在世霁级的舞台，完成了中国品牌的国际展现，获得了来自世界的喝彩。</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="display:none;">
                <div class="row content2" style="display:none;">
                    <div class="cl">
                        <h3>中国领先制造商</h3>
                        <ul>
                            <li>27年中国钢制家具领导者</li>
                            <li>国家级资质荣誉业内健全</li>
                            <li>现代化流水线超大生产力</li>
                            <li>瑞士金马表面喷涂流水线</li>
                            <li>众多政企单位指定供应商</li>
                        </ul>
                    </div>
                    <div class="cr">
                        <img class="lazyload" src="home/static/images/76.png" data-src="/Images/home/m6/76.png"/>
                    </div>
                </div>

                <div class="row big-title" style="margin-top:4rem;">
                    <p class="cn">资质认证</p>
                    <p class="en">CERTIFICATE</p>
                </div>

                <div class="row content">
                    <ul class="roundabout-1">
                        <li>
                            <img class="lazyload" title="花都家具集团有限公司营业执照"
                                 src="home/static/images/636613061423747320.jpg"
                                 data-src="home/static/images/636613061423747320.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团中国环境标志产品认证证书"
                                 src="home/static/images/636613061423405823.jpg"
                                 data-src="home/static/images/636613061423405823.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团环境管理体系认证证书" src="home/static/images/636613061438894113.jpg"
                                 data-src="home/static/images/636613061438894113.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团质量管理体系认证证书" src="home/static/images/636613061422214129.jpg"
                                 data-src="home/static/images/636613061422214129.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团职业健康安全管理体系认证证书"
                                 src="home/static/images/636613061433874335.jpg"
                                 data-src="home/static/images/636613061433874335.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团3A信用等级" src="home/static/images/636613061418356778.jpg"
                                 data-src="home/static/images/636613061418356778.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="欧盟CE出口认证" src="home/static/images/636613061449352918.jpg"
                                 data-src="home/static/images/636613061449352918.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团标准化良好行为证书" src="home/static/images/636613061459352876.jpg"
                                 data-src="home/static/images/636613061459352876.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团质量诚信A级称号"
                                 src="home/static/images/636613061428864494.jpg"
                                 data-src="home/static/images/636613061428864494.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团国家强制3C认证" src="home/static/images/636613061479528682.jpg"
                                 data-src="home/static/images/636613061479528682.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团著名商标证书" src="home/static/images/636613061444225951.jpg"
                                 data-src="home/static/images/636613061444225951.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团钢制资料柜被授予名牌产品"
                                 src="home/static/images/636613061434206309.jpg"
                                 data-src="home/static/images/636613061434206309.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团国际知名品牌" src="home/static/images/636613061424099108.jpg"
                                 data-src="home/static/images/636613061424099108.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团科技小巨人证书" src="home/static/images/636613061454353011.jpg"
                                 data-src="home/static/images/636613061454353011.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团科技型中小企业证书"
                                 src="home/static/images/636613061429187221.jpg"
                                 data-src="home/static/images/636613061429187221.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团电子商务企业证书"
                                 src="home/static/images/636613061474510189.jpg"
                                 data-src="home/static/images/636613061474510189.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团重合同守信用证书"
                                 src="home/static/images/636613061424675547.jpg"
                                 data-src="home/static/images/636613061424675547.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团产品专利证书" src="home/static/images/636613061464489717.jpg"
                                 data-src="home/static/images/636613061464489717.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团产品专利证书" src="home/static/images/636613061469509148.jpg"
                                 data-src="home/static/images/636613061469509148.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团外观设计专利证书" src="home/static/images/636613061439216383.jpg"
                                 data-src="home/static/images/636613061439216383.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团折叠柜发明专利证书" src="home/static/images/636613061430163393.jpg"
                                 data-src="home/static/images/636613061430163393.jpg?width=360&a.sharpen=1"/>
                        </li>
                        <li>
                            <img class="lazyload" title="花都集团产品专利证书" src="home/static/images/636613061425046159.jpg"
                                 data-src="home/static/images/636613061425046159.jpg?width=360&a.sharpen=1"/>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

        <script src="home/static/js/jquery.roundabout.min.js"></script>

        <script>
            jQuery(document).ready(function ($) {

                $('.roundabout-1').roundabout({
                    autoplay: true,
                    autoplayDuration: 2000,
                    autoplayPauseOnHover: false,
                    minScale: 0.2,
                });
                $('.roundabout-1').roundabout('animateToDelta', 30);

            });
        </script>

        <div class="row module module-15">
            <div class="container">
                <div class="row big-title">
                    <p class="cn">走进花都</p>
                    <p class="en">ABOUT HUADU</p>
                </div>

                <div class="row content">
                    <div class="left">
                        <div class="video-container" style="position:absolute;width:0;height:0;opacity:0;">
                            <video class="video-js hd-video" controls height="420" poster="/Images/home/home-video.jpg"
                                   data-setup="{}">
                                <source src="/Images/home/home.mp4" type='video/mp4'/>
                                <p class="vjs-no-js">
                                    对不起此浏览器不支持该视频播放
                                </p>
                            </video>
                        </div>
                        <div class="video-control">
                            <img src="home/static/images/video-nbk.jpg"/>
                            <p class="p0"></p>
                            <p class="p1"><i class="fa fa-play-circle-o" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="item">
                            <a href="/about#zzry">资质荣誉</a>
                        </div>
                        <div class="item">
                            <a href="/about#fzlc">发展历程</a>
                        </div>
                        <div class="item">
                            <a href="/zsjm">招商加盟</a>
                        </div>
                        <div class="item">
                            <a href="/zhaopin">人才招聘</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="home/static/js/jquery.fancybox.min.js"></script>

        <link href="home/static/css/jquery.fancybox.min.css" rel="stylesheet"/>


        <script>
            jQuery(document).ready(function ($) {
                $('.video-control').click(function (e) {
                    $.fancybox.open($('.hd-video'), {
                        buttons: ['close'],
                    });
                });

            });
        </script>


        <div class="row module module-7">
            <div class="container">
                <div class="row small-title">
                    <p class="cn">友情链接</p>
                    <p class="line"></p>
                </div>


                <div class="row link-box-wrap">
                    <div class="link-box">
                        <div class="lf" style="width:100%;">
                            @foreach($yqlj as $v)
                            <p><a href="{{ $v->url }}" target="_blank" rel="noopener">{{ $v->name }}</a></p>
                            @endforeach

                        </div>
                    </div>
                    <span style="width:1px;display:inline-block;overflow:hidden; height:1px;">
                    <a href="http://www.tomorrowal.com/aluminum-circle" target="_blank">aluminum circle</a>
                    <a href="http://www.tomorrowal.com/aluminum-plate" target="_blank">6061 aluminum plate</a>
                </span>
                </div>

            </div>
        </div>

    </div>

@endsection