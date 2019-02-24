<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta name="baidu-site-verification" content="YZ9IVkbAFY" />
    <title>{{ $data->title }}</title>


    <meta name="keywords" content="智能密集架优质品牌,智能密集架" />
    <meta name="description" content="花都从1992年以来，一直秉承着持之以恒的精神，积极进取、锐意创新，致力于密集架的研发。从起初的手摇密集架、电动密集架、到现在的智能密集架，花都凭借时尚的外观设计，更加稳定的性能、以及专业的团队和服务理念，服务全球。花都每一次的突破，都能带来质的改变，在智能密集架及整个密集架行业脱颖而出，成为行业的领军者。" />



    <link href="/favicon.ico" rel="icon" type="image/x-icon" />

    <script src="/home/static/js/jquery.js"></script>


    <link href="/home/static/css/bootstrap3.css" rel="stylesheet"/>

    <script src="/home/static/js/bootstrap3.js"></script>


    <link href="/home/static/css/swiper.css" rel="stylesheet"/>

    <script src="/home/static/js/swiper.js"></script>



    <link href="/home/static/css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="/home/static/css/iconfont.css" rel="stylesheet" type="text/css" />

    <link href="/home/static/css/news.min.css" rel="stylesheet" type="text/css" />



</head>
<body class="news-detail-page">

<!--Header-->
<!--Header-->

<div class="container-fluid header-module">
    <div class="row header-top" style="display:none;">
        <div class="container" style="color:#777;">
            <span>欢迎光临花都家具集团有限公司&nbsp;&nbsp;</span><span>专注27年，打造钢制家具行业典范！</span>
        </div>
    </div>
    <div class="row header-content">
        <div class="container">
            <div class="logo">
                <a style="width:100%;display:inline-block;" href="/"><img title="花都集团" alt="花都集团" src="/home/static/images/home-logo.png" /></a>
            </div>
            <div class="cl">
                <h2>中国钢制办公家具专业品牌</h2>
                <p>专注办公存储与档案智能管理解决方案</p>
            </div>
            <div class="cr">
                <div class="r1"><p>27年品质工厂 注册资金1.006亿</p><p>全国销售网络 专项服务团队</p></div><div class="r2"><span class="red">400</span>-6668-369</div>
            </div>
        </div>
    </div>
    <div class="row header-nav">
        <div class="container">
            <div class="nav-bar">
                <ul class="cl"><li><a href="/">首页</a></li><li><a href="/ganggui" target="_blank" rel="noopener">产品中心</a></li><li style="display: none;"><a href="/ganggui" target="_blank" rel="noopener">钢柜中心</a></li><li><a href="/wenjiangui" target="_blank" rel="noopener">文件柜</a></li><li><a href="/mijijia" target="_blank" rel="noopener">密集架</a></li><li><a href="/gengyigui" target="_blank" rel="noopener">更衣柜</a></li><li><a href="/ggdz" target="_blank" rel="noopener">项目工程</a></li><li><a href="/case" target="_blank" rel="noopener">客户案例</a></li><li><a href="/news" target="_blank" rel="noopener">企业新闻</a></li><li><a href="/about" target="_blank" rel="noopener">了解花都</a></li><li><a href="/contact" target="_blank" rel="noopener">联系花都</a></li></ul>
                <div class="cr" style="display:none;">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input class="search-input" type="text" />
                </div>
                <div class="bar-line"></div>
            </div>
        </div>

    </div>
</div>





<div class="container-fluid">

    <div class="row module module-1">
        <img src="/home/static/images/ban_news_1.jpg" />
    </div>

    <div class="container">
        <ol class="breadcrumb hd-breadcrumb">
            <li><a href="/">花都首页</a></li>
            <li><a href="/news/">公司新闻</a></li>
            <li class="active">详情</li>
        </ol>
    </div>

    <div class="row module module-2">
        <div class="container">

            <div class="left-side">

                <div class="title">
                    <h3>{{ $data->title }}</h3>
                    <p><span>{{ $data->created_at }}</span><span>来源：{{ $data->ly }}</span></p>
                    <hr />
                </div>

                <article class="tinymce-content">{!! $data->data !!} </article>

                <div class="contact-us">
                    <hr/>
                    <a class="sq-call" href="javascript:void(0)" data-msg-id="3"><img src="/home/static/images/djzx.jpg" /></a>
                </div>

                <div class="control-page">
                    <hr />
                    <div>
                        @if($prev_article)
                            <a href="/news/{{ $prev_article->id }}">上一篇：{{ $prev_article->title }}</a>
                        @else
                            <a href="#">上一篇：无</a>
                        @endif
                        @if($next_article)
                            <a href="/news/{{ $next_article->id }}">下一篇：{{ $next_article->title }}</a>
                        @else
                            <a href="#">下一篇：无</a>
                        @endif
                    </div>
                </div>

                <div class="related-news">
                    <div class="title">
                        <i class="fa fa-link" aria-hidden="true"></i><span>相关阅读</span>
                    </div>

                    <div class="content">
                        @foreach($likes as $v)
                        <div class="r-item">
                            <a href="/news/{{ $v->id }}" title="{{ $v->title }}" class="r-link">
                                <span>{{ $v->title }}</span>
                                <span>{{ $v->created_at }}</span>
                            </a>

                        </div>
                        @endforeach
                    </div>

                </div>

            </div>

            @include('home.right')

        </div>

    </div>

    <div class="row module module-3">


        <div class="container">

            <div class="related-product">
                <div class="title">
                    <span>猜您想了解</span>
                </div>

                <div class="content">
                    <div class="swiper-container" data-spacebetween="30" data-slidesperview="3" data-effect="slide" data-nextbutton=".swiper-button-next" data-prevbutton=".swiper-button-prev">
                        <div class="swiper-wrapper">
                            @foreach($wants as $v)
                            <div class="swiper-slide">
                                <a href="/product/{{ $v->id }}" class="product">
                                    <img src="/uploads/{{ $v->images[0] }}" />
                                    <p>{{ $v->title }}</p>
                                </a>
                            </div>
                                @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
<script>
    jQuery(document).ready(function ($) {

        $(document).on("scroll", function (e) {

            var top = $(this).scrollTop();;

            var startTop = $('.module-2').offset().top;
            var endTop = $('.module-3').offset().top - $(".hot-products").height();

            if (top > startTop && top < endTop) {
                $(".hot-products").css("position", "fixed");
            } else {
                $(".hot-products").css("position", "/home/static");
            }


        });

    });
</script>

<script>
    //公共代码
    jQuery(document).ready(function ($) {

        //初始化轮播效果
        $(".swiper-container").each(function (index, element) {

            if ($(this).data("swiper-auto-disabled")) {
                return;
            }

            var $this = $(element);

            var default_params = {
                pagination: null,
                paginationClickable: true,
                autoplay: 2000,
                effect: "fade",
                autoplayDisableOnInteraction: false,
                touchMoveStopPropagation: true,
                touchReleaseOnEdges: false,
                speed: 600,
                loop: true,
                prevButton: null,
                slidesPerColumn:1,
                slidesPerView: 1,
                nextButton: null,
                spaceBetween: 0,
                roundLengths: false,

            };


            for (var item in default_params) {
                var v = $this.data(item.toLowerCase());
                if (typeof v !== 'undefined') {
                    default_params[item] = v;
                }
            }

            $this.data("swiper", new Swiper($this[0], default_params));

            if (!$this.data('mousestop')) {
                $this.on("mouseenter", function (e) {
                    $this.data("swiper").stopAutoplay();
                }).on("mouseleave", function (e) {
                    $this.data("swiper").startAutoplay();
                });
            }


        });


        //初始化鼠标放上去自动显示Tab
        $("[data-over-show-tab='true']").on("mouseenter", "li", function (e) {
            $(this).find("a").click();
        });


    });
</script>


<div class="container-fluid footer-module">
    <div class="footer-box">

        <div class="container">
            <div class="top clearfix">
                <div class="left">
                    <div class="text">
                        <p>
                            花都
                            <span style="letter-spacing:-1px; font-weight:600;">HUADU</span>
                        </p>
                        <a href="/">www.lyhuadu.com</a>
                        <p style="font-size:14px; padding-top:10px;letter-spacing:1px;  font-weight:normal; color:#ccc;">地址：中国·河南·市伊滨区花都国际园</p>
                    </div>
                    <div class="icons">
                        <a href="javasript:void(0)" class="icon qq-call"><i class="fa fa-qq" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)" class="icon weixin">
                            <span>
                                <i class="fa fa-weixin" aria-hidden="true"></i>
                            </span>
                            <span class="wx-qrcode"><img src="/home/static/images/ewm22.jpg" /></span>
                        </a>
                    </div>
                </div>
                <div class="center">
                    <ul class="clearfix"><li><a class="first">产品中心</a> <a href="/wenjiangui">文件柜系列</a> <a href="/gengyigui">更衣柜系列</a> <a href="/mijijia">密集架系列</a> <a href="/huodonggui">活动柜系列</a> <a href="/baoxiangui">保险柜系列</a></li><li><a class="first">关于花都</a> <a href="/about">关于花都</a> <a href="/about#gcsj">工厂实景</a> <a href="/about#zzry">资质荣誉</a> <a href="/zhaopin">人才招聘</a> <a href="/zsjm">代理合作</a></li><li><a class="first">我们的客户</a> <a href="/wenjianguicaigou">单位采购</a> <a href="/wenjianguidingzhi">招投标支持</a> <a href="/wenjianguidaijiagong">OEM/ODM</a> <a href="/wenjianguichukou">外贸公司</a></li></ul>
                </div>
                <div class="right">
                    <div class="fr"><p>联系我们</p><a class="phone" href="tel:{{ $sys->tel }}"><span class="big">{{ $sys->tel }}</span><span class="small">（8:00~21:00）</span></a><p class="phone2">158-9001-8766</p><a class="sq-call" href="#" data-msg-id="5">在线客服</a><hr /><div class="shop-link"><a class="sq-call" href="#" data-msg-id="6"> 集团总部</a> <a class="sq-call last" href="#"> 郑州销售中心</a></div><div class="shop-link last"><a class="sq-call" href="#" data-msg-id="7"> 洛 阳 外 贸 部</a> <a class="sq-call last" href="#" data-msg-id="8"> 全国服务商</a></div></div>
                </div>
            </div>

            <div class="last-version">
                <p>Copyright @ 花都家具集团有限公司 2017.All.Rights Reserved. </p>
                <p>
                    <a rel="nofollow" href="//www.miitbeian.gov.cn">豫ICP备16009306号-1</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="custom-modal-box" style="display:none;">
    <div class="backdrop"></div>
    <div class="body">
        <div class="content">

        </div>
    </div>
</div>

<script>

    (function ($) {

        $.dialog = {
            'show': function (ele,w,h,callback) {

                var $body = $("#custom-modal-box .body");
                var $content = $body.find(">.content");

                var $ele = $content.data('content');
                if ($ele) {
                    $ele.appendTo($('body'));
                }

                $content.html(ele);
                $content.data('content', ele);


                w && $body.width(w);
                h && $body.height(h);

                //居中
                $body.css({ marginTop: $body.height() / -1.5, marginLeft: $body.width() / -2 });

                $("#custom-modal-box").fadeIn('fast', function () {
                    callback && callback.call($content);
                });

                $("#custom-modal-box .backdrop").one('click', function (e) {
                    if ($(this).is(e.target)) {
                        $("#custom-modal-box").fadeOut('fast');
                    }
                })
            },
            'hide': function () {
                $("#custom-modal-box").fadeOut('fast').find(".backdrop").off('click');
            }
        };

    })(jQuery);

</script>

<div class="online-box">
    <div class="wrap">
        <ul class="clearfix">
            <li class="x1 show-all-city-service-btn">
                <p class="p1"><i class="icon alifont hd-fuwushang"></i></p>
                <p class="p2">全国服务商</p>
            </li>
            <li class="x2">
                <p class="p1"><i class="icon alifont hd-tonghua"></i></p>
                <p class="p2">免费通话</p>
            </li>
            <li class="x3" style="display:none;">
                <p class="p1"><i class="icon alifont hd-weixin"></i></p>
                <p class="p2">微信咨询</p>
                <div class="wx-qrcode">
                    <div class="box">
                        <img src="/home/static/images/ewm22.jpg" />
                        <p>请扫码关注后直接提问</p>
                    </div>
                </div>
            </li>
            <li class="x4 qq-call">
                <p class="p1"><i class="icon alifont hd-qq"></i></p>
                <p class="p2">QQ咨询</p>
            </li>
            <li class="x5 sq-call" data-msg-id="9">
                <p class="p1"><i class="icon alifont hd-zaixiankefu"></i></p>
                <p class="p2">在线咨询</p>
            </li>
            <li class="x6" style="display:none;">
                <p class="p1"><i class="icon alifont hd-tubiao250"></i></p>
                <p class="p2">回到顶部</p>
            </li>
        </ul>
    </div>
</div>


<div class="all-city-service">
    <div class="close-btn"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
    <ul>

        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="10"><i class="icon alifont hd-zaixiankefu"></i>郑州</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="11"><i class="icon alifont hd-zaixiankefu"></i></a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="12"><i class="icon alifont hd-zaixiankefu"></i>北京</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="13"><i class="icon alifont hd-zaixiankefu"></i>南京</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="14"><i class="icon alifont hd-zaixiankefu"></i>徐州</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="15"><i class="icon alifont hd-zaixiankefu"></i>兰州</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="16"><i class="icon alifont hd-zaixiankefu"></i>武汉</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="17"><i class="icon alifont hd-zaixiankefu"></i>长沙</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="18"><i class="icon alifont hd-zaixiankefu"></i>济南</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="19"><i class="icon alifont hd-zaixiankefu"></i>东营</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="20"><i class="icon alifont hd-zaixiankefu"></i>西安</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="21"><i class="icon alifont hd-zaixiankefu"></i>宜昌</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="22"><i class="icon alifont hd-zaixiankefu"></i>太原</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="23"><i class="icon alifont hd-zaixiankefu"></i>晋城</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="24"><i class="icon alifont hd-zaixiankefu"></i>其他</a></li>
        <li><a href="javascript:void(0)" class="sq-call" data-msg-id="25"><i class="icon alifont hd-zaixiankefu"></i>外贸</a></li>
    </ul>
    <h3 style="text-align:center;">点击相应的地区咨询客服</h3>
</div>

<div class="free-call-box">
    <div class="close-btn"><p><i class="fa fa-times" aria-hidden="true"></i></p></div>
    <form class="form-inline">
        <div class="form-group">
            <label>填写您的电话：</label>
            <input class="form-control" type="text" placeholder="输入您的电话" />
        </div>
        <button type="button" class="btn btn-primary call-tel-btn"><i class="icon alifont hd-tonghua"></i> 回拨</button>
    </form>
</div>


<script>

    jQuery(document).ready(function ($) {

        $(".show-all-city-service-btn").click(function (e) {
            $.dialog.show($('.all-city-service'), 650, 310, function () {
                $(this).find(".close-btn").off("click").click(function (e) {
                    $.dialog.hide();
                });
            });
        });

        $('.online-box .x2').click(function (e) {

            $.dialog.show($(".free-call-box"), 400, 100, function () {

                $(this).find(".close-btn").off("click").click(function (e) {
                    $.dialog.hide();
                });

                $(this).find(".call-tel-btn").off("click").click(function (e) {
                    lxb.call($(this).closest('form').find('input')[0]);
                });

            });

        });


        $('.online-box .x6').click(function () {
            $('html,body').animate({ scrollTop: 0 }, 'fast');
        });

        $(window).on("scroll", $.throttle(200, false, function () {

            if ($(window).scrollTop() > 400) {
                $('.online-box .x6').fadeIn();
            } else {
                $('.online-box .x6').fadeOut();
            }
        }, false));

    });


</script>

<script>
    //百度商桥
</script>
<script type="text/javascript" async="async" data-lxb-uid="6027069" data-lxb-gid="213299" src="//lxbjs.baidu.com/api/asset/api.js?t= 636860448000000000" charset="utf-8"></script>
<script async src="/home/static/js/bridge.js"></script>







<script>

    (function ($) {

        function initSignalR(readycallback) {
            $.getScript('static/js/signalr/jquery.signalR-2.2.2.min.js', function (e) {
                $.getScript('static/js/signalr/hubs.js', function (e) {
                    readycallback(e);
                });
            });
        }

        //初始化signalR
        initSignalR(function (e) {

            //QrCode校验
            var visitorHub = $.connection.visitorHub;
            visitorHub.client.welcomeVisit = function (msg) {
                //console.log(msg+'ProvinceCity');
            };

            $.connection.hub.start().done(function (e) {



                visitorHub.server.visitPage("347a1387-c772-4ee7-a078-0bf9b2df70d4","/news/11379.html");
            });


            //浏览器关闭时
            window.onbeforeunload = function () {
                $.connection.hub.stop();
            }


        });

    })(jQuery);

</script>

</body>
</html>