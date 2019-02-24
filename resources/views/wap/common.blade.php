<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="applicable-device" content="mobile">
    <meta name="renderer" content="webkit">
    <title>@yield('title')</title>


    <meta name="keywords" content="{{ $sys->keywords }}"/>
    <meta name="description" content="{{ $sys->desc }}"/>



    <link href="/favicon.ico" rel="icon" type="image/x-icon"/>

    <script src="/wap/static/js/jquery-lite.js"></script>


    <link href="/wap/static/css/material.css" rel="stylesheet"/>

    <script src="/wap/static/js/material.js"></script>


    <link href="/wap/static/css/swiper.css" rel="stylesheet"/>

    <script src="/wap/static/js/swiper.js"></script>


    <link href="/wap/static/css/mobile.css" rel="stylesheet"/>

    <script src="/wap/static/js/mobile.js"></script>


    <link href="/wap/static/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/wap/static/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


</head>
<body class="home-page">

<div class="mdl-layout__container">
    <div class="mdl-layout mdl-js-layout">

        <header class="header-box">
            <div class="wrap flex">
                <!-- logo -->
                <a class="header-logo" href="/"><img src="/wap/static/images/logo_min.png"/></a>
                <!-- menu -->
                <ul class="flex">
                    <li><a href="/wenjiangui" class="link  ">文件柜</a></li>
                    <li><a href="/mijijia" class="link  ">密集架</a></li>
                    <li><a href="/baoxiangui" class="link  ">保险柜</a></li>
                    <li><a href="/about" class="link  ">我们</a></li>
                </ul>
                <button class="mdl-button mdl-js-button mdl-button--icon" id="header-menu-top-left">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="header-menu-top-left">
                <li class="mdl-menu__item"><a href="/wenjiangui">文件柜</a></li>
                <li class="mdl-menu__item"><a href="/baoxiangui">保险柜</a></li>
                <li class="mdl-menu__item"><a href="/tushuguanjiaju">图书馆家具</a></li>
                <li class="mdl-menu__item"><a href="/buduiyingju">部队营具</a></li>
                <li class="mdl-menu__item"><a href="/huojia">货架</a></li>
                <li class="mdl-menu__item"><a href="/dianzibaomigui">保密柜</a></li>
                <li class="mdl-menu__item"><a href="/gengyigui">更衣柜</a></li>
                <li class="mdl-menu__item" style="display:none;"><a href="/ggdz">工程定制</a></li>
                <li class="mdl-menu__item"><a href="/case">工程案例</a></li>
                <li disabled class="mdl-menu__item"><a href="/news">企业新闻</a></li>
                <li class="mdl-menu__item" style="display:none;"><a href="/contact">联系花都</a></li>
                <li class="mdl-menu__item"><a href="/about">走进花都</a></li>
            </ul>


        </header>
        @yield('content')
        <footer class="fixed-footer-box">
            <div class="wrapper flex">
                <a class="sq-call" style="" href="#">集团总部</a>
                <a class="sq-call" style="color:#FFFFFF;background-color:rgb(234,2,2);border-left:thin solid #DDDDDD;" href="#">长沙销售中心</a>
            </div>
        </footer>


    </div>
</div>


<div class="widget-fixed-container widget-contact">
    <button class="mdl-button mdl-js-button mdl-button--fab sq-call mdl-js-ripple-effect mdl-button--colored">
        <i class="fa fa-weixin" aria-hidden="true"></i>
    </button>
</div>

<div class="widget-fixed-container free-call-box" style="display:none;">
    <div class="bk"></div>
    <div class="dialog">
        <div class="form-group">
            <label>输入您的电话</label>
            <input type="tel" value=""/>
        </div>
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">回拨</button>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {

        //滚动监听
        var $main = $('#main');
        var $contact = $('.widget-contact');
        var $pageContent = $main.find('.page-content');

        $main.on('scroll', $.throttle(300, false, function () {

            var st = $main.scrollTop();
            var bt = $pageContent.height() - 800;

            if (st > bt) {
                $contact.fadeOut();
            } else {
                $contact.fadeIn();
            }
        }, false));

        //如果底部有fixed-footer-box则移动咨询按钮
        if ($('.fixed-footer-box').length > 0) {

            var moveTop = $('.fixed-footer-box').height() - 10;

            $('.widget-contact button').animate({ bottom: moveTop + 'px' }, 'fast');

            $('.fixed-footer-box').on('click', '.close-btn', function () {
                $('.widget-contact button').animate({ bottom: '0px' }, 'fast');
                $('.fixed-footer-box').remove();
            });
        }


        //修改客服为打开聊天窗口
        $('body').on('click', '.sq-call', function (e) {

            // window.open('后台做动态客服链接');
            window.location.href = "{{ $sys->dtlj }}"
        }).on('click', '.free-call', function (e) {

            e.preventDefault();

            function hideDialog () {
                $('.free-call-box').fadeOut('fast');
                $('.free-call-box .bk').off('click');
                $('.free-call-box button').off('click');
            }

            $('.free-call-box').fadeIn('fast');

            $('.free-call-box').one('click', '.bk', function (e) {
                hideDialog();
            });

            $('.free-call-box').one('click', 'button', function (e) {

                //免费回拨
                var phone = $('.free-call-box input').val();

                $.getJSON('/WeiXin/SendCallBack', { phone: phone }, function (json) {
                    if (json.isok) {
                        alert('请稍等，我们的业务人员将马上与您联系');
                        hideDialog();
                    } else {
                        alert(json.error);
                    }
                });
            });
        });

    });
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
                direction: 'horizontal',
                prevButton: null,
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


    });
</script>


<script>
    // 百度商桥
</script>

</body>
</html>