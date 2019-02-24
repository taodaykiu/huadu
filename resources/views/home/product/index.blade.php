@extends('home.common')

@section('title', '档案柜_移动档案柜_手摇档案柜_中国钢柜27年生产厂家-花都集团')
@section('body', 'product-page')


@section('content')


    <link href="/home/static/css/product.min.css" rel="stylesheet" type="text/css" />

    <div class="container-fluid">

        <div class="container">
            <div class="big-title">
                <p class="cn">
                    <span>产品专题</span>
                </p>
                <p class="en">
                    <span>PRODUCT TOPIC</span>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="topic-list">
                @foreach($xilie as $v)
                <div class="topic">
                    <a href="/{{ $v->url }}" class="box">
                        <div class="text">
                            <h3 class="title">
                                {{ $v->name }}专题
                            </h3>
                            <p>{{ $v->desc }}</p>
                            <p class="open">点击查看</p>
                        </div>
                        <div class="img">
                            <img src="/uploads/{{ $v->image }}" />
                        </div>
                    </a>

                </div>
                @endforeach


            </div>
        </div>

        <div class="container">
            <div class="big-title">
                <p class="cn">
                    <span>产品中心</span>
                </p>
                <p class="en">
                    <span>PRODUCT CENTER</span>
                </p>
            </div>
        </div>

        <div class="row module module-1">
            <div class="container">
                <div class="tag-box" style="display:none;">
                    <div class="tag-item">
                        <a href="#" class="wrap">电子保密柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">档案室密集架</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">铁皮更衣柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">矮柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">器械柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">五节档案柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">财务凭证柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">薄边双色文件柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">移门文件柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">底图柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">期刊架</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">抽屉式文件柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">快劳柜</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">底图密集架</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">图书馆书架</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">校用家具</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">部队营具</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">密集架价格</a>
                    </div>
                    <div class="tag-item">
                        <a href="#" class="wrap">文件柜专题</a>
                    </div>

                </div>

                <div class="cat-nav-box" id="cat-nav-box">
                    <ul class="nav" id="top-cat-nav">
                        @foreach($list as $v)
                        <li class="cat-item">

                            <a href="#cat-pos-{{ $v['id'] }}" title="{{ $v['name'] }}" data-cat-id="{{ $v['id'] }}">{{ $v['name'] }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="sub-cats">
                                @foreach($v['list'] as $vi)
                                <li>
                                    <a title="{{ $vi['name'] }}" href="#cat-pos-{{ $vi['pid'] }}" data-cat-id="{{ $vi['id'] }}">{{ $vi['name'] }}</a>
                                </li>
                                @endforeach
                            </ul>

                        </li>
                        @endforeach

                    </ul>
                    <div class="space"></div>
                </div>

                <div class="cat-product-box">
                    @foreach($list as $v)
                    <div class="cat-title" id="cat-pos-{{ $v['id']}}">
                        <p>{{ $v['name'] }}</p>
                    </div>
                    <ul class="sub-cat-nav">
                        <li class="active in">
                            <a href="#sub-cat-{{ $v['id'] }}" class="item-box" data-toggle="tab">全部</a>
                        </li>
                        @foreach($v['list'] as $vi)
                        <li class="">
                            <a title="{{ $vi['name'] }}" href="#sub-cat-{{ $vi['id'] }}" class="item-box" data-toggle="tab">{{ $vi['name'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="sub-cat-product tab-content">

                        <div class="tab-pane active in" id="sub-cat-1">
                            <div class="cat-product">
                                @foreach($v['all'] as $vii)
                                    <div class="wrap">
                                        <a href="/product/{{ $vii['id'] }}" title="HDW-AB02A对开通玻矮柜" class="item-box">
                                            <div class="img">
                                                <img alt="{{ $vii['title'] }}" src="/uploads/{{ $vii['images'][0] }}" />
                                            </div>
                                            <div class="text">
                                                <p>{{ $vii['title'] }}</p>
                                                <p>{{ $vii['gg'] }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                <div class="more-btn-wrap">
                                    <a href="javascript:void(0)" class="more-btn">查看更多<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                        @foreach($v['list'] as $vi)



                                <div class="tab-pane" id="sub-cat-{{ $vi['id'] }}">
                                    <div class="cat-product">
                                        @foreach($vi['product'] as $vii)
                                        <div class="wrap">
                                            <a href="/product/{{ $vii['id'] }}" title="HDW-AB02A对开通玻矮柜" class="item-box">
                                                <div class="img">
                                                    <img alt="{{ $vii['title'] }}" src="/uploads/{{ $vii['images'][0] }}" />
                                                </div>
                                                <div class="text">
                                                    <p>{{ $vii['title'] }}</p>
                                                    <p>{{ $vii['gg'] }}</p>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                        <div class="more-btn-wrap">
                                            <a href="javascript:void(0)" class="more-btn">查看更多<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {

            $('body').scrollspy({ target: '#cat-nav-box', offset:40 });

            $("#top-cat-nav").width($("#top-cat-nav").innerWidth());
            var startTop = $('.cat-nav-box').offset().top;
            $(document).on("scroll", function (e) {

                var top = $(this).scrollTop();

                if (top > startTop) {
                    $("#top-cat-nav").addClass("fixed");
                } else {
                    $("#top-cat-nav").removeClass("fixed");
                }

            }).trigger('scroll');


            //加载更多
            $(".more-btn-wrap").on("click", function (e) {

                var hides = $(this).closest(".cat-product").find(".hide-wrap:lt(16)");

                hides.removeClass("hide-wrap");

                if ($(this).closest(".cat-product").find(".hide-wrap").length == 0) {
                    $(this).fadeOut('fast');
                }

            });


            //导航处理
            $("#top-cat-nav").on("mouseenter", ".cat-item", function (e) {

                $(this).find("ul").stop().slideDown('fast');

            }).on("mouseleave", ".cat-item", function (e) {

                $(this).find("ul").stop().slideUp('fast');

            }).on("click", ".cat-item a", function (e) {
                e.preventDefault();
                $(this).closest(".sub-cats").hide();
                navTo(this);
            });


            function navTo(a) {
                try {
                    var scrollTop = $($(a).attr("href")).offset().top-40;
                    $("html,body").animate({ scrollTop: scrollTop }, 500);

                    var sub_cat_id = $(a).data('cat-id');
                    if (sub_cat_id) {
                        $("a[href='#sub-cat-" + sub_cat_id+"']").tab("show");
                    }
                } catch (e) {
                    console.log(e);
                }

            }

            //初始化

            if (window.location.hash) {
                $("#cat-nav-box").find("a[href='" + window.location.hash + "']").click();
            }



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

    <script type="text/javascript" async="async" data-lxb-uid="6027069" data-lxb-gid="213299" src="//lxbjs.baidu.com/api/asset/api.js?t= 636860448000000000" charset="utf-8"></script>
    <script async src="/home/static/js/bridge.js"></script>
    <script>

        (function ($) {

            function initSignalR(readycallback) {
                $.getScript('/home/static/js/signalr/jquery.signalR-2.2.2.min.js', function (e) {
                    $.getScript('/home/static/js/signalr/hubs.js', function (e) {
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



                    visitorHub.server.visitPage("01c045ef-4427-4bfd-83df-28ce2b0f6116","/ganggui");
                });


                //浏览器关闭时
                window.onbeforeunload = function () {
                    $.connection.hub.stop();
                }


            });

        })(jQuery);

    </script>

@endsection