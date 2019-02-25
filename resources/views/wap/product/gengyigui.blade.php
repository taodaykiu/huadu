@extends('wap.common')

@section('title', '更衣柜政企指定供应商,河南钢制更衣柜生产厂家,花都集团')
@section('body', '-gengyigui-page')


@section('content')


    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba" contenteditable="false"
                 spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636575066499656067.jpg">
                </div>

                <div class="module-seo"><p>花都钢制更衣柜27年注，打造钢制家具行业典范！</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba" contenteditable="false"
                 spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636575066595827818.jpg">
                </div>

                <div class="module-seo"><p>花都炫彩窄门更衣柜全新上市！色彩随心搭配</p>
                    <p>花都浴室更衣柜</p>
                    <p>不止于美超乎想象的质感色彩与冷轧讴的完美演绎</p>
                    <p>花都彩门更衣柜匀洁清新设计时尚精</p>
                    <p>27年专注打造钢制家具行业典范</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba" contenteditable="false"
                 spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636575066681853477.jpg">
                </div>

                <div class="module-seo"><p>大品牌成就高品质</p>
                    <p>从原材料的挑选，到更衣柜的生产制造，花都保持高标准</p>
                    <p>做耐用又好看的更衣柜</p>
                    <p><br data-mce-bogus="1"></p>
                    <p>我们始终追求品质设计</p>
                    <p>花都现代办公家具，以日常需求为前提</p>
                    <p>品味一种随意，不经意实则意义非凡，精致主义</p>
                    <p><br data-mce-bogus="1"></p>
                    <p><br data-mce-bogus="1"></p>
                    <p>超大空间：大容量、轻松摆放、节省空间；</p>
                    <p>工艺做工：精切割精细做工、精美把手；</p>
                    <p>加厚板材：全钢结构、结实耐用 、承重力强；</p>
                    <p>零甲醛：环保绿色无污染。</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba" contenteditable="false"
                 spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636575066761452878.jpg">
                </div>

                <div class="module-seo"><p>细节成就典范</p>
                    <p><br data-mce-bogus="1"></p>
                    <p>01优选加厚冷轧钢板</p>
                    <p>02精选优质进口锁具</p>
                    <p>03特新设计使用方便</p>
                    <p>04优质进口配件</p></div>
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
            <div class="module control tab-control" data-id="1147bccf-a256-c33a-4002-08d54b979866"
                 contenteditable="false" spellcheck="false">

                <div class="tab-container tab-style-1">
                    <div class="row down-up-line">
                        <ul class="tab-nav">
                            @foreach($list as $k=>$v)
                                <li class="reserve @if($k==1) active @endif"><a href="#" data-toggle="tab">{{ $v->name }}</a></li>
                            @endforeach
                            <li class="no-show"><a class="add-tab-page-btn" href="#">添加标签页+</a></li>
                        </ul>
                    </div>
                    <div class="row tab-page-box">
                        @foreach($list as $k=>$v)
                            <div class="tab-page placeholder @if($k==1) active @endif">

                                <div class="module" data-id="19958736-4c77-ccdb-ecd2-08d54b979906" contenteditable="false"
                                     spellcheck="false">
                                    <div class="product-bag">
                                        <div class="data-module productbag"
                                             data-json="{&quot;tagId&quot;:&quot;25&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:true}"
                                             data-template="DataModule/MobileProduct" contenteditable="false">
                                            <div class="product-list">
                                                @foreach($v['product'] as $vi)
                                                <div class="item-wrap ">
                                                    <a href="/product/{{ $vi->id }}" class="item">
                                                        <img title="{{ $vi->title }}"
                                                             src="/uploads/{{ $vi->images[0] }}">
                                                        <p class="name">{{ $vi->title }}</p>
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
                            </div>
                        @endforeach


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
