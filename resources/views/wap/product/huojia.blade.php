@extends('wap.common')

@section('title', '仓储货架_中型货架_轻型货架_花都集团')
@section('body', '-huojia-page')


@section('content')


    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636577589049254141.jpg" class="" alt="仓储货架" title="仓储货架">
                </div>

                <div class="module-seo"><p>花都集团<br>中国大型仓储货架、轻型货架、中型货架生产厂家</p></div>
            </div>
            <div class="module" data-id="3fd2241c-6e34-cf45-4f52-08d54b979613" contenteditable="false"
                 spellcheck="false" style="background-color: rgb(255, 255, 255); padding-top: 18.8281px;">
                <div class="warpper">
                    <div class="big-title-2">
                        <p class="p1">花都仓储货架</p>
                        <p class="p2"><i></i><span>用料十足/无螺丝结构/专属定制</span><i></i></p>
                    </div>
                </div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636577672753669863.jpg" class="" alt="轻型货架" title="轻型货架">
                </div>

                <div class="module-seo"><p>用料实在 作工精细 喷涂牢固 结实耐用</p>
                    <p>超强承载 轻松收纳 载重量250kg/层<br>重型货架系列<br>工业货架系列<br>中型货架系列<br>轻型货架系列</p>
                    <p>重型仓储货架<br>中型仓储货架<br>轻型仓储货架<br>工业仓储货架</p></div>
            </div>
            <div class="module" data-id="3fd2241c-6e34-cf45-4f52-08d54b979613" contenteditable="false"
                 spellcheck="false" style="background-color: rgb(255, 255, 255); padding-top: 15.0781px;">
                <div class="warpper">
                    <div class="big-title-2">
                        <p class="p1">产品中心</p>
                        <p class="p2"><i></i><span>PRODUCT RECOMENDATION</span><i></i></p>
                    </div>
                </div>

            </div>

            @foreach($list as $v)
                <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                     contenteditable="false" spellcheck="false">
                    <div class="full-image">
                        <a href="/product/{{ $v->id }}"><img src="/uploads/{{ $v->images[0] }}" class=""
                                                             alt="{{ $v->title }}"
                                                             title="{{ $v->title }}"></a>
                    </div>

                    <div class="module-seo"><p>{{$v->title}}</p>
                        <p>{{ $v->td }}</p>
                        <p>{{ $v->tag }}</p></div>
                </div>
            @endforeach
            <script>
              jQuery(document).ready(function ($) {

              });
            </script>
            @include('wap.right')
        </div>
    </main>

@endsection
