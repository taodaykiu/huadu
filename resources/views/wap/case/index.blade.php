<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="applicable-device" content="mobile">
    <meta name="renderer" content="webkit">
    <title>【工程案例】花都文件柜,花都办公家具-洛阳花都家具集团</title>

    <meta name="keywords" content="花都办公家具,花都文件柜,洛阳花都集团客户案例"/>
    <meta name="description" content="洛阳花都是权威的钢制家具品牌,该栏目包括花都办公家具客户案例,想了解更多花都文件柜案例,就到洛阳花都家具集团,厂家热线400-666-8369."/>


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


</head>
<body class="case-page">

<div class="mdl-layout__container">
    <div class="mdl-layout mdl-js-layout">

        <header class="header-box header-box-a">
            <div class="wrap flex">

                <a class="header-left-link" href="/">
                    <i class="fa fa-angle-left" aria-hidden="true"></i> <span>返回首页</span>
                </a>

                <button class="mdl-button mdl-js-button mdl-button--icon" id="toggle-search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
        </header>

        <main id="main" class="mdl-layout__content">
            <div class="page-content">


                <div class="search-box">
                    <form action="/case">
                        <div class="search-input-box flex" style="display:none;">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" name="newsType" type="text" id="sample1">
                                <label class="mdl-textfield__label" for="sample1">查找...</label>
                            </div>
                            <div class="mdl-textfield query-button-field">
                                <button class="mdl-button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="search-suggest-box">
                            <ul class="unit-select selector">
                                <li class="bd"><span style="color:#777;">用户分类</span></li>
                                <li class="item ">
                                    <label>
                                        <input type="radio" name="cate_id" value=""/>
                                        <span>无</span>
                                    </label>
                                </li>
                                @foreach($cate1 as $v)
                                    <li class="item ">
                                        <label>
                                            <input type="radio" name="cate_id" value="{{$v->id}}"/>
                                            <span>{{ $v->name }}</span>
                                        </label>
                                    </li>
                                @endforeach
                                <li class="bd"><span style="color:#777;">地区分类</span></li>

                                @foreach($cate2 as $v)
                                    <li class="item ">
                                        <label>
                                            <input type="radio" name="cate_id" value="{{$v->id}}}"/>
                                            <span>{{ $v->name }}</span>
                                        </label>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                    </form>

                    <div class="result-box">

                        <div class="wrap">

                            <div class="case-list">
                                @foreach($list as $v)
                                <div class="item">
                                    <a href="/case/{{ $v->id }}" title="初次合作，花都集团用诚信奠定长期合作">
                                        <div class="img">
                                            <img src="/uploads/{{ $v->thumb }}"/>
                                        </div>
                                        <div class="text">
                                            <p class="r1">{{ $v->title }}</p>
                                            <p class="r2">{{ $v->created_at->format('Y-m-d') }}</p>
                                        </div>
                                    </a>
                                </div>
                               @endforeach

                            </div>

                            <p class="pull-down-more">向下拉查看更多</p>
                        </div>
                    </div>

                </div>

                <script>
                  jQuery(document).ready(function ($) {

                    //获取案例数据
                    var page = 2;

                    function getCaseList(callback) {
                      var $form = $(".search-box form");
                      $form.ajaxSubmit({
                        dataType: 'json',
                        url: '/Case/MobileQueryList',
                        data: {page: page, pageSize: 10},
                        success: function (json) {
                          callback(json);
                        },
                        error: function (e) {
                          callback({isok: false, error: e});
                        }
                      });
                    }

                    //初始化滚动
                    var $caseList = $(".result-box .case-list");
                    var $pullDownEle = $(".pull-down-more");
                    var scrollHeight = $(window).height() - $(".result-box").offset().top;
                    $(".result-box").height(scrollHeight);
                    var boxScroller = $(".result-box").scroller({probeType: 2, click: true});

                    //加载成功后刷新滚动UI
                    $caseList.imagesLoaded(function () {
                      boxScroller.refresh();
                    });

                    //正在滚动时
                    boxScroller.on('scroll', function (e) {

                      if ($pullDownEle.hasClass('do-ajax')) { //正在加载则返回
                        return;
                      }

                      if (this.y < this.maxScrollY - 20) {    //下拉大于20刷新
                        $pullDownEle.addClass('pull-down').text('释放查看更多');
                      } else if ($pullDownEle.hasClass('pull-down')) {
                        $pullDownEle.removeClass('pull-down').text('向下拉查看更多');
                      }
                    });

                    //滚动结束
                    boxScroller.on('scrollEnd', function (e) {

                      if ($pullDownEle.hasClass('pull-down')) {   //释放查看更多

                        //添加正在加载状态
                        $pullDownEle.removeClass('pull-down').addClass('do-ajax').text('正在加载中...');

                        getCaseList(function (json) {

                          //刷新正在加载状态
                          $pullDownEle.removeClass('do-ajax').text('向下拉查看更多');

                          if (json.isok) {

                            page += 1;
                            $caseList.append(json.html);

                            boxScroller.refresh();

                            //准备刷新UI
                            $caseList.imagesLoaded(function () {
                              boxScroller.refresh();
                            });

                          } else {
                            alert('没有更多了');
                          }
                        });
                      }
                    })


                    //搜索框获得焦点
                    $("#toggle-search-btn").click(function (e) {
                      $(this).toggleClass("active");
                      $(".search-box").toggleClass('active');
                    });

                    //点击分类进入
                    $(".unit-select").on('click', 'li.item', function (e) {

                      var $form = $(this).closest('form');
                      var $radio = $(this).find('input');

                      $form.find('input[type="radio"]:checked').not($radio).each(function (i, ele) {
                        $(this).prop('checked', false);
                      });
                      $radio.attr('checked', true);

                      $form.submit();
                    });

                  });
                </script>


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

      // window.open();
      window.location.href = "{{ $sys->dtlj }}"
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
