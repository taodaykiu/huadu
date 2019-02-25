@extends('wap.common')
@section('title', '花都集团招聘_花都家具集团官方招聘网站')
@section('body', 'article-page')


@section('content')


    <main id="main" class="mdl-layout__content">
        <div class="page-content">
            <article>

                <div class="article-content">
                    {!! $page->data !!}
                </div>
            </article>
        </div>
    </main>

@endsection
