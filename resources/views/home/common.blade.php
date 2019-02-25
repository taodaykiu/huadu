<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="applicable-device" content="pc,mobile">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta name="baidu-site-verification" content="YZ9IVkbAFY"/>
    <title>@yield('title')</title>


    <meta name="keywords" content="{{ $sys->keywords }}"/>
    <meta name="description" content="{{ $sys->desc }}"/>


    <link href="/favicon.ico" rel="icon" type="image/x-icon"/>

    <script src="/home/static/js/jquery.js"></script>


    <link href="/home/static/css/bootstrap3.css" rel="stylesheet"/>

    <script src="/home/static/js/bootstrap3.js"></script>


    <link href="/home/static/css/swiper.css" rel="stylesheet"/>

    <script src="/home/static/js/swiper.js"></script>


    <link href="/home/static/css/style.min.css" rel="stylesheet" type="text/css"/>
    <link href="/home/static/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/home/static/css/module.min.css" rel="stylesheet" type="text/css"/>


</head>
<body class="@yield('body')">



<div class="container-fluid header-module">
    <div class="row header-top" style="display:none;">
        <div class="container" style="color:#777777;">
            <span>欢迎光临{{ $sys->title }}&nbsp;&nbsp;</span><span>专注27年，打造钢制家具行业典范！</span>
        </div>
    </div>
    <div class="row header-content">
        <div class="container">
            <div class="logo">
                <a style="width:100%;display:inline-block;" href="/"><img title="花都集团" alt="花都集团" src="/home/static/images/home-logo.png"/></a>
            </div>
            <div class="cl">
                <h2>中国钢制办公家具专业品牌</h2>
                <p>专注办公存储与档案智能管理解决方案</p>
            </div>
            <div class="cr">
                <div class="r1"><p>27年品质工厂 注册资金1.006亿</p>
                    <p>全国销售网络 专项服务团队</p></div>
                <div class="r2"><span class="red">{{ substr($sys->tel,0,3) }}</span>{{ substr($sys->tel,3,10) }}</div>
            </div>
        </div>
    </div>
    <div class="row header-nav">
        <div class="container">
            <div class="nav-bar">
                <ul class="cl">
                    <li><a href="/">首页</a></li>
                    <li><a href="/ganggui" target="_blank" rel="noopener">产品中心</a></li>
                    <li><a href="/wenjiangui" target="_blank" rel="noopener">文件柜</a></li>
                    <li><a href="/mijijia" target="_blank" rel="noopener">密集架</a></li>
                    <li><a href="/gengyigui" target="_blank" rel="noopener">更衣柜</a></li>
                    <li><a href="/ggdz" target="_blank" rel="noopener">项目工程</a></li>
                    <li><a href="/case" target="_blank" rel="noopener">客户案例</a></li>
                    <li><a href="/news" target="_blank" rel="noopener">企业新闻</a></li>
                    <li><a href="/about" target="_blank" rel="noopener">了解花都</a></li>
                    <li><a href="/contact" target="_blank" rel="noopener">联系花都</a></li>
                </ul>
                <div class="cr" style="display:none;">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input class="search-input" type="text"/>
                </div>
                <div class="bar-line"></div>
            </div>
        </div>

    </div>
</div>

@yield('content')
<!--Home Body-->


<div class="container-fluid">
    <div class="row home-bottom-ad">
        <div class="container">
            <p>如果您有任何问题 欢迎与我们联系</p>
            <a href="javascript:void(0)" class="sq-call" data-msg-id="30">联系我们</a>
        </div>
    </div>
</div>

<div class="chat-widget-box" style="display:none">
    <div class="title"><img src="{{ $sys->logo }}"/><span>{{ $sys->title }}</span></div>
    <div class="content">
        <h4>花都集团长沙销售部竭诚为您服务</h4>
        <p class="p2"><img src="/home/static/images/dt.jpg"/><span>点击咨询</span></p>
        <div class="btn-group">
            <p><a href="javascript:void(0)" class="sq-call"><i class="alifont hd-zixun1"></i>长沙销售中心</a></p>
            <p><a href="javascript:void(0)" class="sq-call"><i class="alifont hd-zixun1"></i>集团总部</a></p>
        </div>
    </div>
    <div class="footer">
        <p><i class="alifont hd-tonghua"></i><span>{{ $sys->tel }}</span></p>
    </div>
    <div class="close-btn">
        <i class="fa fa-times"></i>
    </div>
</div>


<script>

    (function ($) {

        $('#select-ip-city').on('change', function (e) {
            var addr = $(this).val();
            $.getJSON('/Admin/Home/SimulateAddr', { addr: addr }, function (json) {
                if (json.isok) {
                    $.flash(2000, '切换成功');
                }
            });
        });

        setTimeout(function () {
            $('.chat-widget-box').fadeIn('fast');
            $('.chat-widget-box .close-btn').click(function () {
                $('.chat-widget-box').fadeOut('fast');
            })
        }, 10000);

    })(jQuery);

</script>

<script>
    //公共代码
    jQuery(document).ready(function ($) {

        //初始化轮播效果
        $('.swiper-container').each(function (index, element) {

            if ($(this).data('swiper-auto-disabled')) {
                return;
            }

            var $this = $(element);

            var default_params = {
                pagination: null,
                paginationClickable: true,
                autoplay: 2000,
                effect: 'fade',
                autoplayDisableOnInteraction: false,
                touchMoveStopPropagation: true,
                touchReleaseOnEdges: false,
                speed: 600,
                loop: true,
                prevButton: null,
                slidesPerColumn: 1,
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

            $this.data('swiper', new Swiper($this[0], default_params));

            if (!$this.data('mousestop')) {
                $this.on('mouseenter', function (e) {
                    $this.data('swiper').stopAutoplay();
                }).on('mouseleave', function (e) {
                    $this.data('swiper').startAutoplay();
                });
            }


        });


        //初始化鼠标放上去自动显示Tab
        $('[data-over-show-tab=\'true\']').on('mouseenter', 'li', function (e) {
            $(this).find('a').click();
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
                        <a href="/">{{ $sys->url }}</a>
                        <p style="font-size:14px; padding-top:10px;letter-spacing:1px;  font-weight:normal; color:#CCCCCC;">地址：{{ $sys->address }}</p>
                    </div>
                    <div class="icons">
                        <a href="javasript:void(0)" class="icon qq-call"><i class="fa fa-qq" aria-hidden="true"></i></a>
                        <a href="javascript:void(0)" class="icon weixin">
                            <span>
                                <i class="fa fa-weixin" aria-hidden="true"></i>
                            </span>
                            <span class="wx-qrcode"><img src="/uploads/{{ $sys->code }}"/></span>
                        </a>
                    </div>
                </div>
                <div class="center">
                    <ul class="clearfix">
                        <li><a class="first">产品中心</a> <a href="/wenjiangui">文件柜系列</a> <a href="/gengyigui">更衣柜系列</a> <a href="/mijijia">密集架系列</a> <a href="/huodonggui">活动柜系列</a> <a href="/baoxiangui">保险柜系列</a></li>
                        <li><a class="first">关于花都</a> <a href="/about">关于花都</a> <a href="/about#gcsj">工厂实景</a> <a href="/about#zzry">资质荣誉</a> <a href="/zhaopin">人才招聘</a> <a href="/zsjm">代理合作</a></li>
                        <li><a class="first">我们的客户</a> <a href="/wenjianguicaigou">单位采购</a>  <a href="/wenjianguidingzhi">招投标支持</a> <a href="/wenjianguidaijiagong">OEM/ODM</a> <a href="/wenjianguichukou">外贸公司</a></li>
                    </ul>
                </div>
                <div class="right">
                    <div class="fr"><p>联系我们</p><a class="phone" href="tel:{{ $sys->tel }}"><span class="big">{{ $sys->tel }}</span><span class="small">（8:00~21:00）</span></a>
                        <p class="phone2">{{ $sys->phone }}</p><a class="sq-call" href="#" data-msg-id="5">在线客服</a>
                        <hr/>
                        <div class="shop-link"><a class="sq-call" href="#" data-msg-id="6"> 集团总部</a> <a class="sq-call last" href="#"> 郑州销售中心</a></div>
                        <div class="shop-link last"><a class="sq-call" href="#" data-msg-id="7"> 洛 阳 外 贸 部</a> <a class="sq-call last" href="#" data-msg-id="8"> 全国服务商</a></div>
                    </div>
                </div>
            </div>

            <div class="last-version">
                <p>Copyright @ {{ $sys->gs }} 2017.All.Rights Reserved. </p>
                <p>
                    <a rel="nofollow" href="//www.miitbeian.gov.cn">{{ $sys->bah }}</a>
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
            'show': function (ele, w, h, callback) {

                var $body = $('#custom-modal-box .body');
                var $content = $body.find('>.content');

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

                $('#custom-modal-box').fadeIn('fast', function () {
                    callback && callback.call($content);
                });

                $('#custom-modal-box .backdrop').one('click', function (e) {
                    if ($(this).is(e.target)) {
                        $('#custom-modal-box').fadeOut('fast');
                    }
                })
            },
            'hide': function () {
                $('#custom-modal-box').fadeOut('fast').find('.backdrop').off('click');
            },
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
                        <img src="/home/static/images/ewm22.jpg"/>
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
            <input class="form-control" type="text" placeholder="输入您的电话"/>
        </div>
        <button type="button" class="btn btn-primary call-tel-btn"><i class="icon alifont hd-tonghua"></i> 回拨</button>
    </form>
</div>


<script>

    jQuery(document).ready(function ($) {

        $('.show-all-city-service-btn').click(function (e) {
            $.dialog.show($('.all-city-service'), 650, 310, function () {
                $(this).find('.close-btn').off('click').click(function (e) {
                    $.dialog.hide();
                });
            });
        });

        $('.online-box .x2').click(function (e) {

            $.dialog.show($('.free-call-box'), 400, 100, function () {

                $(this).find('.close-btn').off('click').click(function (e) {
                    $.dialog.hide();
                });

                $(this).find('.call-tel-btn').off('click').click(function (e) {
                    lxb.call($(this).closest('form').find('input')[0]);
                });

            });

        });


        $('.online-box .x6').click(function () {
            $('html,body').animate({ scrollTop: 0 }, 'fast');
        });

        $(window).on('scroll', $.throttle(200, false, function () {

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


<!--<script>

    (function ($) {

        function initSignalR (readycallback) {
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


                visitorHub.server.visitPage('062d8042-83ee-4d73-829b-07b652d553ee', '/');
            });


            //浏览器关闭时
            window.onbeforeunload = function () {
                $.connection.hub.stop();
            }


        });

    })(jQuery);

</script>-->

</body>
</html>
