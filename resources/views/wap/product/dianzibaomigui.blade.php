@extends('wap.common')

@section('title', '【保密柜】_电子保密柜_保密文件柜_花都家具_中国大型保密柜厂家')
@section('body', '-dianzibaomigui-page')


@section('content')
    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636577374543033196.jpg" class="" alt="保密柜" title="保密柜">
                </div>

                <div class="module-seo"><p>27年专注钢柜生产与研发<br>花都电子保密柜<br></p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636821261747745813.jpg" class="" alt="电子保密柜" title="电子保密柜">
                </div>

                <div class="module-seo"><p>花都保密文件柜系列展示</p>
                    <p>单门国保密码锁<br>花都家具 安全<br>国家保密局认证产品</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <a href="/product/614.html"><img src="/wap/static/images/636821258054932791.jpg" class=""
                                                     alt="保密文件柜"
                                                     title="保密文件柜"></a>
                </div>

                <div class="module-seo"><p>单门国保密码锁<br>花都家具 安全<br>国家保密局认证产品</p>
                    <p><br>双色国保锁保密柜<br>加厚板材/认证锁具防撬设计</p></div>
            </div>
            <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                 contenteditable="false" spellcheck="false">
                <div class="full-image" style="position: relative;">
                    <img src="/wap/static/images/636821259373634345.jpg" class="" alt="保密柜" title="保密柜">
                </div>

                <div class="module-seo"><p>保密柜，电子保密柜，保密文件柜</p>
                    <p>国家认证智能密码锁</p>
                    <p>密码面板+把手议题涉及<br>舒适把手，自动报警 无需钥匙，缺电提醒</p>
                    <p><br></p></div>
            </div>
            @foreach($list as $k=>$v)
                @if($k<=1)
                    <div class="module recognize-text" data-id="2f368f99-cc16-c6fb-e4d2-08d54b9797ba"
                         contenteditable="false" spellcheck="false">
                        <div class="full-image">
                            <a href="/product/{{ $v->id }}"><img src="/uploads/{{ $v->images[0] }}" class=""
                                                                 alt="{{ $v->title }}"
                                                                 title="{{ $v->title }}"></a>
                        </div>

                        <div class="module-seo"><p>{{ $v->td }}</p>
                            <p><br>{{ $v->title }}</p>
                            <p>{{ $v->tag }}</p></div>
                    </div>
                @endif
            @endforeach

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
                         data-json="{&quot;tagId&quot;:&quot;4&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:true}"
                         data-template="DataModule/MobileProduct" contenteditable="false">
                        <div class="product-list">
                            @foreach($list as $k=>$v)
                                @if($k>1)
                                    <div class="item-wrap ">
                                        <a href="/product/{{ $v->id }}" class="item">
                                            <img title="{{ $v->title }}" src="/uploads/{{ $v->images[0] }}">
                                            <p class="name">{{ $v->title }}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach

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
