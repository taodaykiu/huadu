@extends('wap.common')

@section('title', '保险柜_花都保险柜_中国十大保险柜品牌')
@section('body', 'bxg-page')


@section('content')


    <main id="main" class="mdl-layout__content">
        <div class="page-content">


            <div class="module resizeable recognize-text"
                 style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255); padding-bottom: 0px;"
                 contenteditable="false" spellcheck="false">
                <div class="full-image">
                    <img src="/wap/static/images/636821227942805041.jpg">
                </div>

                <div class="module-seo"><p>花都集团专注研发27年，花都保管箱中国十大保管箱品牌，花都保管箱您的贴心财富管家。<br>花都保管箱全国配送，工厂直发，减少中间环节，以更低价格，尊享更高品质；售后保障，花都客服全程跟踪服务，售前售后保障，全国花都服务商为您提供上门维修，五星售后服务。花都36年不断进取，不止做好产品，更是做好服务。<br>花都保管箱经典品牌，品质之选，全国二十万用户口碑保障。花都保管箱更安全，更放心，中国保管箱十大品牌。<br>什么是安全？<br>1、全钢防爆锁栓，四大实心锁栓，加粗直径30mm，安全系数提升<br>2、平门微缝设计，门缝小于0.55mm，箱体密封性和稳固性大幅提升，防盗升级。<br>3、花都保管箱多种安防开启方式，智能指纹，电子密码，机械密码等多种开启方式，随心选择。<br>4、花都保管箱多重安全保障，智能指纹、电子密码、机械密码等多种开启方式，内置抽屉，暗格等更加安全。<br>指纹系列保管箱<br>电子系列保管箱<br>经典系列保管箱
                    </p>
                    <p>&nbsp;</p></div>
            </div>
            @foreach($list as $v)

                <div class="module resizeable recognize-text"
                     style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);">
                    <div class="full-image">
                        <img src="/uploads/{{ $v->image }}" class="">
                    </div>

                </div>
                <div class="module resizeable"
                     style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"
                     contenteditable="false" spellcheck="false">
                    <div class="wrapper twopic">
                        <div class="flex">
                            @foreach($v->product as $vi)
                            <div class="item">
                                <a href="/product/{{ $vi->id }}">
                                    <img src="/uploads/{{ $vi->images[0] }}" class="">
                                    <p>{{ $vi->title }}</p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            @endforeach




            <div class="module resizeable control tab-control"
                 style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);">

                <div class="tab-container tab-style-1">
                    <div class="row down-up-line">
                        <ul class="tab-nav">

                            <li class="active"><a href="#" data-toggle="tab">全部</a></li>
                            @foreach($list as $v)
                            <li class=""><a href="#" data-toggle="tab" class="">{{ $v->name }}</a></li>
                            @endforeach
                            <li class="no-show"><a class="add-tab-page-btn" href="#">添加标签页+</a></li>
                        </ul>
                    </div>
                    <div class="row tab-page-box">

                        <div class="tab-page placeholder active">
                            <div class="module resizeable" contenteditable="false" spellcheck="false">
                                <div class="product-bag">
                                    <div class="data-module productbag"
                                         data-json="{&quot;tagId&quot;:&quot;77&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:&quot;true&quot;}"
                                         data-template="DataModule/MobileProduct">
                                        <div class="product-list">
                                            @foreach($tj as $v)

                                            <div class="item-wrap">
                                                <a href="/product/{{ $v->id }}" class="item">
                                                    <img title="{{ $v->title }}"
                                                         src="/uploads/{{ $v->images[0] }}">
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
                        </div>
                        @foreach($list as $v)
                        <div class="tab-page placeholder">
                            <div class="module resizeable">
                                <div class="product-bag">
                                    <div class="data-module productbag"
                                         data-json="{&quot;tagId&quot;:&quot;72&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:&quot;true&quot;}"
                                         data-template="DataModule/MobileProduct">
                                        <div class="product-list">
                                            @foreach($v->product as $vi)
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
