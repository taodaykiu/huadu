@extends('wap.common')

@section('title', '图书馆书架_图书馆家具_阅览室书架_花都家具集团')
@section('body', '-tushuguanjiaju-page')


@section('content')

    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636821208859943586.jpg" class="" alt="图书馆书架" title="图书馆书架">
                </div>

                <div class="module-seo"><p>花都图书馆家具</p>
                    <p>中国大型钢制家具生产厂商</p>
                    <p>花都图书馆家具</p>
                    <p>新型结构设计/结实耐用/绿色零甲醛</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636821209583420342.jpg" class="" alt="图书室书架" title="图书室书架">
                </div>

                <div class="module-seo"><p>花都小百科</p>
                    <p>怎样挑选图书馆家具产品</p>
                    <p>安全 细节完美才能保证安全</p>
                    <p>环保 0甲醛，无污染 真正绿色环保<br>耐用 使用寿命长 更加结实耐用<br>美观 设计简约 人性化既美观实用</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636579403098026553.jpg" class="" alt="阅览室书架" title="阅览室书架">
                </div>

                <div class="module-seo"><p>图书馆书架系列<br>钢制书架系列<br>图书馆阅览桌系列<br>图书馆期刊架系列</p>
                    <p>&nbsp;</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636579407626835048.jpg" class="" alt="图书馆书架" title="图书馆书架">
                </div>

            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636579407700213847.jpg" class="" alt="图书室书架" title="图书室书架">
                </div>

                <div class="module-seo"><p>图书馆书架系列<br>钢制书架系列<br>图书馆阅览桌系列<br>图书馆期刊架系列</p>
                    <p>&nbsp;</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636579407760468127.jpg" class="" alt="阅览室书架" title="阅览室书架">
                </div>

                <div class="module-seo"></div>
            </div>
            <div class="module" data-id="3fd2241c-6e34-cf45-4f52-08d54b979613" contenteditable="false"
                 spellcheck="false">
                <div class="warpper">
                    <div class="big-title-2">
                        <p class="p1">产品中心</p>
                        <p class="p2"><i></i><span>PRODUCT RECOMENDATION</span><i></i></p>
                    </div>
                </div>

            </div>
            <div class="module" data-id="19958736-4c77-ccdb-ecd2-08d54b979906" contenteditable="false"
                 spellcheck="false">
                <div class="product-bag">
                    <div class="data-module productbag"
                         data-json="{&quot;tagId&quot;:&quot;35&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:true}"
                         data-template="DataModule/MobileProduct" contenteditable="false">
                        <div class="product-list">

                            @foreach($list as $k=>$v)

                                <div class="item-wrap @if($k>5)hide @endif">
                                    <a href="/product/{{ $v->id }}" class="item">
                                        <img title="{{ $v->title }}" src="/uploads/{{ $v->images[0] }}">
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
                </div>

            </div>
            <script>
              jQuery(document).ready(function ($) {

              });
            </script>
            @include('wap.right')
        </div>
    </main>


@endsection
