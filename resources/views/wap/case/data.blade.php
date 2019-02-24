@extends('home.common')

@section('title', $data->title)
@section('body', 'news-detail-page')


@section('content')
    <link href="/home/static/css/news.min.css" rel="stylesheet" type="text/css"/>
    <div class="container-fluid">

        <div class="row module module-1">
            <img src="/home/static/images/ny_ban.jpg"/>
        </div>

        <div class="container">
            <ol class="breadcrumb hd-breadcrumb">
                <li><a href="/">花都首页</a></li>
                <li><a href="/case">工程案例</a></li>
                <li class="active">详情</li>
            </ol>
        </div>

        <div class="row module module-2">
            <div class="container">

                <div class="left-side">

                    <div class="title">
                        <h3>{{ $data->title }}</h3>
                        <p><span>{{ $data->created_at->format('Y-m-d') }}</span><span>来源：{{ $data->author }}</span></p>
                        <hr/>
                    </div>

                    <article class="tinymce-content">
                        {!! $data->data !!}
                    </article>

                    <div class="contact-us">
                        <hr/>

                        <div class="icon"><img style="width:90px;height:90px;border-radius:45px;"
                                               src="/uploads/{{ \App\Algw::find($data->algw_id)['image']  }}"/></div>
                        <div class="text">
                            <div class="name"><span class="l">{{ \App\Algw::find($data->algw_id)['name'] }}</span><span
                                        class="r">{{ \App\Algw::find($data->algw_id)['zw']  }}</span></div>
                            <div class="desc">
                                <span>{{ \App\Algw::find($data->algw_id)['qm']  }}</span>
                            </div>
                            <a href="#" class="sq-call">咨 询</a>
                        </div>

                    </div>

                    <div class="control-page">
                        <hr/>
                        <div>
                            @if($prev_article)
                                <a href="/case/{{ $prev_article->id }}">上一篇：{{ $prev_article->title }}</a>
                            @else
                                <a href="#">上一篇：无</a>
                            @endif
                            @if($next_article)
                                <a href="/case/{{ $next_article->id }}">下一篇：{{ $next_article->title }}</a>
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
                                <a href="/case/{{ $v->id }}" class="r-link">
                                    <span>{{ $v->title }}</span>
                                    <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                </a>

                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>

                @include('home.right')
            </div>

        </div>



    </div>

    <script>

        (function ($) {

            $.dialog = {
                'show': function (ele, w, h, callback) {

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
                    $body.css({marginTop: $body.height() / -1.5, marginLeft: $body.width() / -2});

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
@endsection