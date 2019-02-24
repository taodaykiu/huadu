@extends('home.common')

@section('title', '不锈钢柜_不锈钢柜价格_中国不锈钢柜厂家_花都集团')
@section('body', '-buxiugang-page')


@section('content')



    <script src="/home/static/js/module.js"></script>





    <div class="container-fluid">
        <div class="module resizeable recognize-text">
            <div class="container-fluid full-image">
                <img src="/home/static/images/636417798324871797.jpg">
            </div>

        </div><div class="module resizeable selected" contenteditable="false" spellcheck="false">

            <div class="container">
                <div class="big-title-2" style="margin-top: 3rem; margin-bottom: 1rem;">
                    <h2>花都不锈钢柜</h2>
                    <hr>
                    <p style="width: 40%;">优质板材配件/人性化设计/匠心制造</p>
                </div>
            </div>




        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img" style="position: relative;">
                <img src="/home/static/images/636417798362420431.jpg">
            </div>

            <div class="module-seo"><p>都不的0幗外表美观/长久耐用／维护简单/使用广泛MAKESTAIN、LES'§ELÅLLSTEELAGE</p></div></div><div class="module resizeable">

            <div class="container">
                <div class="big-title-2" style="margin-top: 3rem; margin-bottom: 1rem;">
                    <h2>花都小百科</h2>
                    <hr>
                    <p style="width: 40%;">怎样挑选优质的不锈钢制品？</p>
                </div>
            </div>




        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img" style="position: relative;">
                <img src="/home/static/images/636417798351746913.jpg">
            </div>

        </div><div class="module resizeable">

            <div class="container">
                <div class="big-title-2" style="margin-top: 3rem; margin-bottom: 1rem;">
                    <h2>产品中心</h2>
                    <hr>
                    <p style="width: 40%;">PRODUCT RECOMENDATION</p>
                </div>
            </div>


            @foreach($list as $v)

        </div><div class="module resizeable layout-control" contenteditable="false" spellcheck="false">
            <div class="container">
                <div class="p-box">
                    <div class="desc">
                        <h2>{{ $v->title }}</h2>
                        <h3>{{ $v->tag }}</h3>
                        <i></i>
                        <p>
                            {{ $v->td }}
                             </p></div>

                    <div class="series data-module catproducts" data-template="DataModule/Product1-4" data-json="{&quot;tagId&quot;:&quot;32&quot;,&quot;showType&quot;:&quot;2&quot;}">

                        <div class="full">
                            <a href="javascript:void(0)"><img src="/uploads/{{ $v->images[0] }}"></a>
                        </div>
                        <div class="thumb thumb1">

                            @foreach($v->images as $vi)
                                <div class="product" data-url="javascript:void(0)">
                                    <img src="/uploads/{{ $vi }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="no-show toggle-btn-box">
                    <button class="btn btn-primary" type="button">切换左右布局</button>
                </div>
            </div>

            @endforeach
        </div><div class="module resizeable recognize-text">
            <div class="container-fluid full-image">
                <a href="http://p.qiao.baidu.com/cps/chat?siteId=2416525&amp;userId=6027069/"><img src="/home/static/images/636417798325604047.jpg"></a>
            </div>

        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798357264266.jpg">
            </div>

        </div><div class="module resizeable recognize-text" contenteditable="false" spellcheck="false">
            <div class="container-fluid full-image">
                <img src="/home/static/images/636523903112555221.jpg">
            </div>

        </div><div class="module resizeable">

            <div class="container">
                <div class="big-title-2" style="margin-top: 3rem; margin-bottom: 1rem;">
                    <h2>产品细节优势</h2>
                    <hr>
                    <p style="width: 40%;">PRODUCT RECOMENDATION</p>
                </div>
            </div>




        </div><div class="module resizeable recognize-text" contenteditable="false" spellcheck="false">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798332762186.jpg">
            </div>

        </div><div class="module resizeable recognize-text" contenteditable="false" spellcheck="false">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798334568953.jpg">
            </div>

        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798344529846.jpg">
            </div>

        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798347830821.jpg">
            </div>

        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img">
                <img src="/home/static/images/636417798351024210.jpg">
            </div>

        </div><div class="module resizeable recognize-text">
            <div class="container full-bk-img" style="position: relative;">
                <img src="/home/static/images/636417798367528122.jpg">
            </div>

        </div><div class="module resizeable" contenteditable="false" spellcheck="false"><div class="container">
                <div class="big-title-2" style="margin-top: 3rem; margin-bottom: 1rem;">
                    <h2>花都印象</h2>
                    <hr>
                    <p style="width: 30%;background-color:#ffffff">HUADU IMPRESSION</p>
                </div>
            </div>

            <div class="container" style="text-align: center;">
                <img src="/home/static/images/636783033946127563.jpg">
                <img src="/home/static/images/636535254951988268.jpg">
            </div></div>
    </div>
@endsection