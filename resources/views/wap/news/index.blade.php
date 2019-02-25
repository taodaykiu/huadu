@extends('wap.common')
@section('title', '公司新闻-花都集团')
@section('body', 'news-page')


@section('content')
    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="panel-box news-box">
                <ul class="news-nav flex">
                    <li class="active"><a href="#news-cat-0" data-toggle="tab">公司新闻</a></li>
                    <li><a href="#news-cat-1" data-toggle="tab">行业新闻</a></li>
                    <li><a href="#news-cat-2" data-toggle="tab">常见问题</a></li>
                </ul>

                <div class="tab-content news-list-box">
                    <div class="tab-pane active cat cat-1" id="news-cat-0">
                        <div class="scroll-box" data-news-type="1" data-page="2">
                            <div class="wrap">
                                <div class="news-list">
                                    @foreach(\App\News::whereType(1)->orderBy('created_at','desc')->get() as $v)
                                    <div class="item">
                                        <a href="/news/{{ $v->id }}" title="{{ $v->title }}">
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
                    <div class="tab-pane cat cat-1" id="news-cat-1">
                        <div class="scroll-box" data-news-type="2" data-page="2">
                            <div class="wrap">
                                <div class="news-list">
                                    @foreach(\App\News::whereType(2)->orderBy('created_at','desc')->get() as $v)
                                        <div class="item">
                                            <a href="/news/{{ $v->id }}" title="{{ $v->title }}">
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
                    <div class="tab-pane cat cat-1" id="news-cat-2">
                        <div class="scroll-box" data-news-type="3" data-page="2">
                            <div class="wrap">
                                <div class="news-list">
                                    @foreach(\App\News::whereType(3)->orderBy('created_at','desc')->get() as $v)
                                        <div class="item">
                                            <a href="/news/{{ $v->id }}" title="{{ $v->title }}">
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
                </div>
            </div>

            <script>
              jQuery(document).ready(function ($) {

                //获取数据
                function getNewsList(page, newsType, callback) {

                  $.get({
                    dataType: 'json',
                    url: '/News/MobileQueryList',
                    data: {page: page, pageSize: 10, newsType: newsType},
                    success: function (json) {
                      callback(json);
                    },
                    error: function (e) {
                      callback({isok: false, error: e});
                    }
                  });
                }

                $('.news-list-box .tab-pane>.scroll-box').each(function (index, ele) {

                  //初始化
                  var $newsList = $(this).find('.news-list');
                  var $newsListBox = $(this).closest('.news-list-box');
                  var $pullDownEle = $(this).find(".pull-down-more");
                  var newsType = $(this).data('news-type');
                  var page = $(this).data('page');

                  //设置高度
                  var scrollHeight = $(window).height() - $newsListBox.offset().top - 2;
                  $(this).height(scrollHeight);

                  var boxScroller = $(this).scroller({probeType: 2, click: true});

                  //加载成功后刷新滚动UI
                  $newsList.imagesLoaded(function () {
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

                      getNewsList(page, newsType, function (json) {

                        //刷新正在加载状态
                        $pullDownEle.removeClass('do-ajax').text('向下拉查看更多');

                        if (json.isok) {

                          page += 1;
                          $newsList.append(json.html);

                          boxScroller.refresh();

                          //准备刷新UI
                          $newsList.imagesLoaded(function () {
                            boxScroller.refresh();
                          });

                        } else {
                          alert('没有更多了');
                        }
                      });
                    }
                  })

                });

                $('.news-nav a').on('shown.bs.tab', function (e) {

                  //查找滚动组件
                  var id = $(this).attr('href');
                  var scroller = $(id).find('.scroll-box').data('scroller');
                  scroller && scroller.refresh();

                });
              });
            </script>


        </div>
    </main>

@endsection
