@extends('wap.common')
@section('title', '公司新闻-花都集团')
@section('body', 'article-page')


@section('content')

    <main id="main" class="mdl-layout__content">
        <div class="page-content">
            <article>
                <h2 class="article-title">{{ $data->title }}</h2>
                <p class="article-author">
                    <span class="bable">{{ $data->ly }}</span>
                    <span class="time">{{ $data->created_at->format('Y-m-d') }}</span>
                </p>
                <div class="article-content">
                    {!! $data->data !!}
                </div>
            </article>
            <div class="continue-news-box">
                @if($prev_article)
                    <a href="/news/{{ $prev_article->id }}">
                        <i class="fa fa-link" aria-hidden="true"></i>上一篇：{{ $prev_article->title }}</a>

                @else
                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>上一篇：无</a>
                @endif
                @if($next_article)
                    <a href="/news/{{ $next_article->id }}">
                        <i class="fa fa-link" aria-hidden="true"></i>上一篇：{{ $next_article->title }}</a>

                @else
                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>下一篇：无</a>
                @endif
            </div>

            <div class="title-panel-box related-news-box">
                <div class="title">
                    <p>相关阅读</p>
                </div>
                <div class="content">

                    @foreach($likes as $v)
                        <div class="r-item">
                            <a href="/news/{{ $v->id }}" title="{{ $v->title }}" class="r-link">
                                <span>{{ $v->title }}</span>
                                <span class="time">{{ $v->created_at }}</span>
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>

            <div class="title-panel-box related-product-box">
                <div class="title">
                    <p>猜你想了解</p>
                </div>
                <div class="content">

                    <div class="orientation-scroll-box">
                        <ul class="wrap">

                            @foreach($wants as $v)

                                <li class="item">
                                    <a href="/product/{{ $v->id }}" class="product">
                                        <span class="img">
                                            <img src="/uploads/{{ $v->images[0] }}"/>
                                        </span>
                                        <p>{{ $v->title }}</p>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('wap.right')
    </main>



@endsection
