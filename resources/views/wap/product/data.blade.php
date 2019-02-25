@extends('wap.common')

@section('title', $data->title.'_花都集团_中国大型货架厂家')
@section('body', 'product-detail-page')


@section('content')
    <link href="/home/static/css/product.min.css" rel="stylesheet" type="text/css" />
    <div class="container-fluid">

        <div class="container">
            <ol class="breadcrumb hd-breadcrumb">
                <li><a href="/">花都首页</a></li>
                <li><a href="/ganggui/{{ \App\Cate::find($data->level2)['id']  }}">{{ \App\Cate::find($data->level2)['name']  }}</a></li>
                <li class="active">产品：{{ $data->title }}</li>
            </ol>
        </div>

        <div class="row module module-1">
            <div class="container">

                <div class="top-box">

                    <div class="top" style="display:none;">
                        <ul class="zt-list">
                        </ul>
                    </div>

                    <div class="left">

                        <div class="view">
                            <div class="swiper-container" data-swiper-auto-disabled="true">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-wrapper">

                                    {{--<div class="swiper-slide">--}}
                                        {{--<img src="/uploads/{{ $data->images[0] }}" />--}}
                                    {{--</div>--}}
                                    @foreach($data->images as $v)
                                        <div class="swiper-slide">
                                            <img src="/uploads/{{ $v }}" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="preview">
                            <div class="swiper-container" data-swiper-auto-disabled="true">
                                <div class="swiper-wrapper">
                                    @foreach($data->images as $v)
                                    <div class="swiper-slide">
                                        <img src="/uploads/{{ $v }}" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="right">
                        <h3>{{ $data->title }}</h3>
                        <p class="p1">品牌： {{ $data->pp }}</p>
                        <p class="p3">颜色： {{ $data->ys }}</p>
                        <p class="p4">规格： {{ $data->gg }}</p>
                        <div class="p5"><span>特点：</span><div>@foreach(explode('|',$data->td) as $v)<p>{{ $v }}</p>@endforeach</div></div>
                        <div class="p6">

                            <a href="javascript:void(0)" class="sq-call sq-call-3"><i class="fa fa-comments" aria-hidden="true"></i>大客户采购咨询</a>
                            <a href="https://detail.1688.com/offer/561720677736.html?spm=a26286.8251493.0.0.4PAQXb" target="_blank" rel="nofollow" data-msg-id="4"><i class="fa fa-shopping-cart" aria-hidden="true"></i>在线采购</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row module module-3" style="display:">
            <div class="container">
                <h3>相关产品</h3>
                <div class="swiper-container swiper-xgcp" data-loop="false" data-spacebetween="30" data-slidesperview="4" data-effect="slide" data-nextbutton=".swiper-button-next" data-prevbutton=".swiper-button-prev">
                    <div class="swiper-wrapper">
                        @foreach($xg_list as $v)
                        <div class="swiper-slide">
                            <a href="/product/{{ $v->id }}">
                                <div class="img">
                                    <img src="/uploads/{{ $v->images[0] }}" />
                                </div>
                                <div class="text">
                                    <p>{{ $v->title }}</p>
                                    <p>{{ $v->gg }}</p>
                                </div>
                            </a>

                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="row module module-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="product-desc-nav">
                            <li class="active"><a href="#product-desc-box" data-toggle="tab">产品详情</a></li>
                            <li class=""><a href="#product-anzhuang-box" data-toggle="tab">生产定制</a></li>
                            <li class=""><a href="#product-peisong-box" data-toggle="tab">产品配送</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="product-desc-box">
                                {!! $data->data !!}
                            </div>
                            <div class="tab-pane fade" id="product-anzhuang-box">
                                <img src="/home/static/images/youshi1.jpg" />
                                <img src="/home/static/images/youshi2.jpg" />
                                <img src="/home/static/images/youshi3.jpg" />
                                <img src="/home/static/images/youshi4.jpg" />
                                <img src="/home/static/images/youshi5.jpg" />
                            </div>
                            <div class="tab-pane fade" id="product-peisong-box">
                                <img src="/home/static/images/peisong.jpg" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-offset-1" style=" ">
                        <div class="pad-right">
                            <div class="wrapper">
                                <div class="recommend-product">
                                    <div class="title">热销产品</div>
                                    <ul class="clearfix">
                                        @foreach($hot as $k=>$v)
                                        <li>
                                            <a href="/product/{{ $v->id }}" class="item nounderline">
                                                <div class="wrapper">
                                                    <img src="/uploads/{{ $v->images[0] }}" />
                                                    <i class="color-1">{{ $k + 1 }}</i>
                                                </div>
                                                <p class="textover">{{ $v->title }}</p>
                                            </a>
                                        </li>
                                         @endforeach
                                    </ul>
                                </div>
                                <div class="cat-zhuanti" style="">
                                    <div class="wrapper">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script>
        jQuery(document).ready(function ($) {

            $(document).on("scroll", function (e) {

                var top = $(this).scrollTop();;
                var startTop = $('.module-2').offset().top;
                var catBoxTop = $('.cat-zhuanti').offset().top;

                if (top > startTop) {
                    $(".product-desc-nav").css("position", "fixed");
                } else {
                    $(".product-desc-nav").css("position", "/home/static");
                }

                if (top > catBoxTop) {
                    $('.cat-zhuanti .wrapper').addClass('fixed');
                } else {
                    $('.cat-zhuanti .wrapper').removeClass('fixed');
                }


            });






            var viewSwiper = new Swiper('.top-box .view .swiper-container', {
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next',
                onSlideChangeStart: function () {
                    updateNavPosition()
                }
            })

            var previewSwiper = new Swiper('.preview .swiper-container', {
                spaceBetween: 20,
                effect:'slide',
                slidesPerView: 4,
                direction:'vertical',
                onTap: function () {
                    viewSwiper.slideTo(previewSwiper.clickedIndex)
                }
            })

            function updateNavPosition() {
                $('.preview .active-nav').removeClass('active-nav')
                var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav')
                if (!activeNav.hasClass('swiper-slide-visible')) {
                    if (activeNav.index() > previewSwiper.activeIndex) {
                        var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
                        previewSwiper.slideTo(activeNav.index() - thumbsPerNav)
                    } else {
                        previewSwiper.slideTo(activeNav.index())
                    }
                }
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
@endsection
