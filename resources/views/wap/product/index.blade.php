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


    <script src="/wap/static/js/iscroll-probe-min.js"></script>
    <script>
      jQuery(document).ready(function ($) {

        //获取数据
        function loadProductList(catId, callback) {
          $("#loading-box").fadeIn('fast');
          $.get({
            dataType: 'json',
            url: '/Product/MobileQueryList',
            data: {catId: catId},
            success: function (json) {
              $("#loading-box").fadeOut('fast');
              if (json.isok) {
                $(".product-list-box").html(json.html);
              }
              callback && callback(json);
            },
            error: function (e) {
              $("#loading-box").fadeOut('fast');
              callback && callback({isok: false, error: e});
            }
          });
        }

        //滚动
        function refreshScrollNav() {

          //当前位置是否第一个可见，不是则滚动
          var navItemLeft = $('.cat-nav-wrap li.active').position().left;
          var navScrollLeft = $('.cat-nav-wrap').scrollLeft();

          if (navItemLeft - navScrollLeft > 50) {
            $('.cat-nav-wrap').animate({scrollLeft: (navItemLeft - 50) + 'px'}, 'fast');
          } else {
            $('.cat-nav-wrap').animate({scrollLeft: (navItemLeft - 100) + 'px'}, 'fast');
          }

          //当前位置是否第一个可见，不是则滚动
          var $subCatTab = $(".sub-cat.active");
          var subNavItemLeft = $subCatTab.find('.sub-cat-nav-wrap li.active').position().left;
          var subNavScrollLeft = $subCatTab.find('.sub-cat-nav-wrap').scrollLeft();

          if (subNavItemLeft - subNavScrollLeft > 50) {
            $subCatTab.find('.sub-cat-nav-wrap').animate({scrollLeft: (subNavItemLeft - 50) + 'px'}, 'fast');
          } else {
            $subCatTab.find('.sub-cat-nav-wrap').animate({scrollLeft: (subNavItemLeft - 100) + 'px'}, 'fast');
          }


          $subCatTab.find(".sub-cat-nav-wrap").each(function (index, ele) {
            $(this).scrollText(50, 1000, 2000);
          });
        }

        //初始化一次滚动
        refreshScrollNav();

        //点击子系列
        $(".sub-cat-nav").on("click", ".item a", function (e) {

          var catId = $(this).data('cat-id');
          $(this).closest('.sub-cat-nav').find('.item').removeClass('active');
          $(this).closest('.item').addClass('active');

          loadProductList(catId, function () {
            refreshScrollNav();
          });
        });

        //切换时
        $('.cat-nav-wrap').on('shown.bs.tab', 'li a', function (e) {

          var catId = $(this).data('cat-id');

          // //查找激活的子选项
          // var subNav = $($(this).attr('href')).find('.sub-cat-nav');
          // if (subNav.length > 0 && subNav.find('li.active').length == 0) {
          //   var firstActive = subNav.find('li:first').addClass('active');
          //   catId = firstActive.find('a').data('cat-id');
          // }

          loadProductList(catId, function () {
            refreshScrollNav();
          });
        });

        //显示更多
        $('.product-list-box').on('click', '.show-more-btn button', function (e) {

          var hides = $('.product-list-box .cat-list').find('.item-wrap.hide');
          var count = hides.length;

          if (count > 0) {
            hides.slice(0, 16).each(function () {

              var img = $(this).find('img');

              var src = img.data('original');
              img.attr('src', src);

              $(this).removeClass('hide');
            });
          }
          if (count < 16) {
            $(this).closest('.show-more-btn').remove();
          }
        });
      });
    </script>


</head>
<body class="ganggui-page">

<div class="mdl-layout__container">
    <div class="mdl-layout mdl-js-layout">

        <header class="header-box">
            <div class="wrap flex">
                <!-- logo -->
                <a class="header-logo" href="/"><img src="/uploads/{{$sys->logo}}"/></a>
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
                <li class="mdl-menu__item"><a href="/huojia">货架</a></li>
                <li class="mdl-menu__item"><a href="/dianzibaomigui">保密柜</a></li>
                <li class="mdl-menu__item"><a href="/gengyigui">更衣柜</a></li>
                <li class="mdl-menu__item" style="display:none;"><a href="/ggdz">工程定制</a></li>
                <li class="mdl-menu__item"><a href="/case">工程案例</a></li>
                <li disabled class="mdl-menu__item"><a href="/news">企业新闻</a></li>
                <li class="mdl-menu__item" style="display:none;"><a href="/contact">联系花都</a></li>
                <li class="mdl-menu__item"><a href="/about">走进花都</a></li>
            </ul>


            <div class="line"></div>
            <div class="flex cat-nav-wrap">
                <ul class="cat-nav">
                    @foreach($list as $k=>$v)

                        <li class="item @if($v['id']==$getid) active @endif">
                            <a href="#sub-cat-{{ $v['id'] }}" data-cat-id="{{ $v['id'] }}" data-toggle="tab">
                                <span>{{ $v['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="line"></div>
            <!--子系列-->
            <div class="tab-content">
                @foreach($list as $k=>$v)
                <div class="tab-pane sub-cat @if($v['id']==$getid) active @endif" id="sub-cat-{{ $v['id'] }}">

                    <div class="flex sub-cat-nav-wrap">
                        <ul class="sub-cat-nav">
                            <li class="item"><a href="javascript:void(0)" data-cat-id=1>全部</a></li>
                            @foreach($v['list'] as $vi)
                            <li class="item @if($vi['id']==$id) active @endif"><a href="javascript:void(0)" data-cat-id="{{ $vi['id'] }}">{{ $vi['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endforeach
            </div>


        </header>

        <main id="main" class="mdl-layout__content">
            <div class="page-content">


                <div class="panel-box" style="height:4px; background-color:transparent; margin:4px 0;">
                    <div id="loading-box" style="display:none;"
                         class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                </div>

                <div class="panel-box product-list-box" style="margin-top:0;">
                    <div class="cat-list">
                        @foreach($lists as $v)
                        <div class="item-wrap">
                            <a href="/product/{{ $v->id }}" class="item">
                                <img title="{{ $v->title }}" src="/uploads/{{ $v->images[0] }}"/>
                                <p class="name">{{ $v->title }}</p>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    <div class="show-more-btn">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            显示更多
                        </button>
                    </div>

                </div>
                <div class="panel-box" style="height:4px; background-color:transparent; margin:4px 0;">
                    <div id="loading-box" style="display:none;"
                         class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                </div>

                @include('wap.right')
            </div>
        </main>


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
    var $main = $("#main");
    var $contact = $(".widget-contact");
    var $pageContent = $main.find('.page-content');

    $main.on("scroll", $.throttle(300, false, function () {

      var st = $main.scrollTop();
      var bt = $pageContent.height() - 800;

      if (st > bt) {
        $contact.fadeOut();
      } else {
        $contact.fadeIn();
      }
    }, false));

    //如果底部有fixed-footer-box则移动咨询按钮
    if ($(".fixed-footer-box").length > 0) {

      var moveTop = $(".fixed-footer-box").height() - 10;

      $(".widget-contact button").animate({bottom: moveTop + 'px'}, 'fast');

      $(".fixed-footer-box").on('click', '.close-btn', function () {
        $(".widget-contact button").animate({bottom: '0px'}, 'fast');
        $(".fixed-footer-box").remove();
      });
    }


    //修改客服为打开聊天窗口
    $("body").on('click', '.sq-call', function (e) {

      window.open("后台做动态客服链接");
      //window.location.href = "https://p.qiao.baidu.com/cps/chat?siteId=2416525&userId=6027069"
    }).on('click', '.free-call', function (e) {

      e.preventDefault();

      function hideDialog() {
        $(".free-call-box").fadeOut('fast');
        $(".free-call-box .bk").off('click');
        $(".free-call-box button").off('click');
      }

      $(".free-call-box").fadeIn('fast');

      $(".free-call-box").one('click', '.bk', function (e) {
        hideDialog();
      });

      $(".free-call-box").one('click', 'button', function (e) {

        //免费回拨
        var phone = $(".free-call-box input").val();

        $.getJSON('/WeiXin/SendCallBack', {phone: phone}, function (json) {
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

      $this.data("swiper", new Swiper($this[0], default_params));

      if (!$this.data('mousestop')) {
        $this.on("mouseenter", function (e) {
          $this.data("swiper").stopAutoplay();
        }).on("mouseleave", function (e) {
          $this.data("swiper").startAutoplay();
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
