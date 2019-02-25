@extends('wap.common')

@section('title', $data->title)
@section('body', 'article-page')


@section('content')

    <main id="main" class="mdl-layout__content">
        <div class="page-content">
            <article>
                <h2 class="article-title">{{ $data->title }}</h2>
                <p class="article-author">

                    <span class="img"><img
                                src="/uploads/{{ \App\Algw::find($data->algw_id)['image'] }}"/> {{ $data->author }}</span>
                    <span class="time">{{ $data->created_at->format('Y-m-d') }}</span>
                </p>
                <div class="article-content">
                    {!! $data->data !!}
                </div>
            </article>
            <div class="continue-news-box">

                @if($prev_article)
                    <a href="/case/{{ $prev_article->id }}">
                        <i class="fa fa-link" aria-hidden="true"></i>上一篇：{{ $prev_article->title }}</a>

                @else
                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>上一篇：无</a>
                @endif
                @if($next_article)
                    <a href="/case/{{ $next_article->id }}">
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
                            <a href="/case/{{ $v->id }}" class="r-link">
                                <span><i class="fa fa-link" aria-hidden="true"></i>{{ $v->title }}</span>
                                <span class="time">{{ $v->created_at->format('Y-m-d') }}</span>
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
            @include('wap.right')
        </div>

    </main>

@endsection
