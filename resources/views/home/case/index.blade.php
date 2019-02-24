@extends('home.common')

@section('title', '【工程案例】花都文件柜,花都办公家具-花都家具集团')
@section('body', 'news-page')


@section('content')

    <link href="/home/static/css/news.min.css" rel="stylesheet" type="text/css" />

    <div class="container-fluid">

        <div class="row module module-1">

        </div>

        <div class="container">
            <ol class="breadcrumb hd-breadcrumb" id="top-breadcrumb">
                <li>
                    <a href="/">花都首页</a>
                </li>
                <li class="active">案例中心</li>
            </ol>
        </div>

        <div class="row module module-2">
            <div class="container">

                <div class="top">
                    <ul class="pic-5-box clearfix">
                        @foreach($top as $v)
                        <li class="index-20">
                            <a href="/case/{{ $v->id }}" target="_blank">
                                <img src="/uploads/{{ $v->thumb }}" title="{{ $v->title }}" alt="{{ $v->title }}" style="width:100%;min-height:100%;">
                                <div class="txt">
                                    <p>{{ $v->title }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

                <div class="left">
                    <ul class="news-nav">
                        <li class="static">
                            <p>
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>案例中心
                            </p>
                        </li>
                        <li>
                            <a href="/news"><i class="fa fa-paperclip" aria-hidden="true"></i>公司新闻</a>
                        </li>
                    </ul>

                    <ul class="news-nav news-nav-2">
                        <li class="static">
                            <p>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>联系花都
                            </p>
                        </li>
                        <li class="">
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
                                    <a style="border:none; padding:0;font-size:0.7rem; color:inherit;" href="tencent://Message/?Uin={{ $sys->qq }}&websiteName=花都家具集团=&Menu=yes"><i style="padding-right:0; font-size:0.7rem;" class="fa fa-qq" aria-hidden="true"></i>：{{ $sys->qq }}</a>
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

                    <form action="/Case/QueryList" method="get" class="form-horizontal query-form">
                        <input type="hidden" name="page" value="1" />
                        <input type="hidden" name="pageSize" value="10" />
                        <input type="hidden" name="sortKey" value="" />
                        <div class="form-group selector-wrap">
                            <label>案例分类</label>
                            <ul class="unit-select selector">
                                <li class="bd">
                                    <span style="color:#777;">用户分类</span>
                                </li>
                                @foreach($cate1 as $v)
                                <li>
                                    <label>
                                        <input type="radio" name="unitType"  value="{{ $v->name }}" />
                                        <span>{{ $v->name }}</span>
                                    </label>
                                </li>
                                @endforeach

                                <li class="bd">
                                    <span style="color:#777;">地区案例</span>
                                </li>
                                @foreach($cate2 as $v)
                                    <li>
                                        <label>
                                            <input type="radio" name="unitType"  value="{{ $v->name }}" />
                                            <span>{{ $v->name }}</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </form>

                    <div class="news-list clearfix">
                        @foreach($list as $v)
                        <div class="casenew-box">
                            <a href="/case/{{ $v->id }}" class="wrap clearfix">
                                <div class="author">
                                    <img width="60" src="/uploads/{{\App\Algw::find($v->algw_id)['image']  }}" />
                                    <span>{{ \App\Algw::find($v->algw_id)['bm'] }}</span>
                                </div>
                                <div href="/case/{{ $v->id }}" class="img"><img src="/uploads/{{ $v->thumb }}" /></div>
                                <div class="text">
                                    <p href="/case/{{ $v->id }}" class="title">{{ $v->title }}</p>
                                    <p class="digest">{{ $v->desc }}</p>
                                    <p class="date"><span>阅读全文</span><span class="right">更新日期：{{ $v->created_at->format('Y-m-d') }}</span></p>
                                </div>
                            </a>
                        </div>
                        @endforeach





                    </div>
                    {{ $list->links() }}
                </div>

                <div class="bottom">
                    <div class="sm-title">
                        <h2>部分案例推荐</h2>
                    </div>

                    <ul class="cat-casenews-list">
                        @foreach($tj as $v)
                        <li class="r">
                            <div class="item">
                                <a href="/case/{{ $v->id }}" target="_blank" class="img_mod">
                                    <img width="275" height="168" src="/uploads/{{ $v->thumb }}">
                                    <div class="txt">{{ $v->title }}</div>
                                </a>

                            </div>

                        </li>
                        @endforeach
                    </ul>

                    <div class="sm-title">
                        <h2>花都经典客户</h2>
                    </div>
                    <div class="container" style="text-align:center; margin-bottom:2rem;">
                        <img src="/home/static/images/case_b.png" />
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>

        jQuery(document).ready(function ($) {

            //左边部分随滚动静止
            $(document).on("scroll", function (e) {

                var $moduleRight = $(".module-2 .right");
                var $moduleLeft = $(".module-2 .left");

                var top = $(this).scrollTop();;
                var startTop = $moduleRight.offset().top;
                var endTop = $moduleRight.offset().top + $moduleRight.height() - $moduleLeft.height() - 60;

                if (top > startTop && top < endTop) {
                    $moduleLeft.addClass("fixed").css("paddingTop", 0);
                } else if (top >= endTop) {

                    $moduleLeft.removeClass("fixed").css("paddingTop", (endTop - startTop) + 'px');

                } else {
                    $moduleLeft.removeClass("fixed").css("paddingTop", 0);
                }

            });

            var $data_container = $(".news-list");
            var $form = $(".query-form");

            function queryList() {
                $form.ajaxSubmit({
                    beforeSubmit: function () {

                    },
                    dataType: 'html',
                    success: function (html) {
                        $data_container.html(html);

                        //返回到顶端
                        $('html,body').animate({ 'scrollTop': $form.offset().top + 'px' }, 'fast');
                    },
                    error: function (e) {

                    }
                });
            }

            $data_container.on('click', '.pagination li a', function (e) {
                e.preventDefault();

                var page = $(this).parent().data("page");
                $form.find("input[name='page']").val(page);

                queryList();
            });

            $form.find('input[type="radio"]').on('change', function (e) {

                $form.find('input[type="radio"]:checked').not(this).each(function (i, ele) { $(this).prop('checked', false); });

                queryList();
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

@endsection