@extends('home.common')

@section('title', '智能密集柜|智能密集架,专业智能密集架生产厂家,花都集团')
@section('body', '-zhinengmijigui-page')


@section('content')



    <script src="/home/static/js/module.js"></script>




    <div class="container-fluid">
        <div class="module recognize-text" data-id="40c5c64a-48ff-c9d4-86f2-08d54b9453bd" contenteditable="false"
             spellcheck="false">
            <div class="container-fluid full-image">
                <img src="/home/static/images/636662154958090516.jpg" class="" alt="智能密集柜" title="智能密集柜">
            </div>

            <div class="module-seo"></div>
        </div>
        <div class="module" spellcheck="false" data-id="81d2e6ee-03d3-c018-1bab-08d5e0860415" contenteditable="false">
            <div class="container">
                <ul class="col-pic-4">
                    <li class="p1">
                        <img src="/home/static/images/636662369824142058.png">
                        <h4>档案管理</h4>
                        <p>智能密集柜档案管理系统 实现档案无序存放，有序管理</p>
                    </li>
                    <li class="p2">
                        <img src="/home/static/images/636662369932872340.png">
                        <h4>安全管理</h4>
                        <p>智能密集柜通过红外感应、视频监控、门禁管理，档案存储安全无忧&nbsp;</p>
                    </li>
                    <li class="p3">
                        <img src="/home/static/images/636662370011876168.png">
                        <h4>环境管理</h4>
                        <p>智能密集柜中央控制系统统一控制，实现档案环境温湿度控制和安全消防</p>
                    </li>
                    <li class="p4">
                        <img src="/home/static/images/636662370077921107.png">
                        <h4>操作便捷</h4>
                        <p>&nbsp;智能密集柜五种操作方式 通过局域网建立，实现档案远程操作和查询&nbsp;&nbsp;</p>
                    </li>
                </ul>
            </div>
            <div class="module-seo"></div>
        </div>
        <div class="module" data-id="137ce481-8ba8-c9bf-b862-08d54b775ff0" contenteditable="false" spellcheck="false">
            <div class="container">
                <div class="big-title-2" style="margin-top:3rem;margin-bottom:1rem;">
                    <h2>档案库房一体化智能管理系统</h2>
                    <hr>
                    <p style="width:40%; background-color:#ffffff;">智能化档案管理 花都为您提供一站式服务</p>
                </div>
            </div>
        </div>
        <div class="module recognize-text" data-id="d8822ac6-12e0-c707-4a22-08d54b94542e" contenteditable="false"
             spellcheck="false">
            <div class="container full-bk-img">
                <img src="/home/static/images/636662262645922864.jpg" class="" alt="智能密集柜" title="智能密集柜">
            </div>

            <div class="module-seo"><p>手摇、电动、智能三种功能形式，电脑、PDA、操作屏、IPad、红外遥控五种操作方式</p>
                <p>系统集成智能管理系统，存取放一体化管理，实现档案无序存放，有序管理。</p></div>
        </div>
        <div class="module recognize-text" data-id="d8822ac6-12e0-c707-4a22-08d54b94542e" contenteditable="false"
             spellcheck="false">
            <div class="container full-bk-img">
                <img src="/home/static/images/636825662006975036.jpg" class="" alt="电动密集柜" title="电动密集柜">
            </div>

            <div class="module-seo"><p>中央控制系统对档案库房、密集柜智能管理统一控制，一站式打造智能档案库房</p>
                <p>档案库房集安全管理系统、环境智能系统、消防检测系统于一体，杜绝档案安全隐患</p></div>
        </div>
        <div class="module" data-id="137ce481-8ba8-c9bf-b862-08d54b775ff0" contenteditable="false" spellcheck="false">
            <div class="container">
                <div class="big-title-2" style="margin-top:3rem;margin-bottom:1rem;">
                    <h2>产品展示</h2>
                    <hr>
                    <p style="width:35%; background-color:#ffffff;">PRODUCT RECOMENDATION</p>
                </div>
            </div>
        </div>
        <div class="module" data-id="0538b698-3c4b-c752-1472-08d54b9458fb" contenteditable="false" spellcheck="false">

            <div class="container product-bag">
                <div class="container data-module productbag"
                     data-json="{&quot;tagId&quot;:&quot;10&quot;,&quot;showType&quot;:&quot;1&quot;,&quot;canClick&quot;:true}"
                     data-template="DataModule/ProductBag" contenteditable="false">

                    <div class="product-list" data-id="10" id="tid-10">
                        <ul>
                            @foreach($list as $v)
                                <li>
                                    <a href="/product/{{ $v->id }}" target="black">
                                        <img src="/uploads/{{ $v->images[0] }}" alt="{{ $v->title }}"
                                             title="{{ $v->title }}">
                                        <p>{{ $v->title }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <i class="c1"></i>
                        <i class="c2"></i>
                        <i class="r1"></i>
                    </div>
                    <div class="more-product-btn">
                        <button class="prev">上一批</button>
                        <button class="next">下一批</button>
                    </div>
                </div>
                <div class="all-product-link"><br></div>
            </div>

        </div>
        <div class="module" data-id="137ce481-8ba8-c9bf-b862-08d54b775ff0" contenteditable="false" spellcheck="false">
            <div class="container">
                <div class="big-title-2" style="margin-top:3rem;margin-bottom:1rem;">
                    <h2>智能密集柜生产工艺</h2>
                    <hr>
                    <p style="width:20%; background-color:#ffffff;">精工细作 只做精品</p>
                </div>
            </div>
            <div class="module-seo"></div>
        </div>
        <div class="module" data-id="bced9193-1bdb-cd60-f91d-08d5ca91778d" spellcheck="false"
             style="background-color: rgb(246, 247, 251); padding-top: 22.5313px;" contenteditable="false">
            <div class="container clearfix  slider-box-6" ；="">
                <div class="left">
                    <img class="" src="/home/static/images/636620670054217834.jpg">
                </div>
                <div class="right">
                    <div class="box-list">
                        <ul class="clearfix">
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-shengchananpai" aria-hidden="true"></i></p>
                                    <h3>九大智能操作系统</h3>
                                    <div class="txt">手动、电动、智能等五种操作方式，九大操作系统,全方位满足档案室使用需求。</div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636627767294979004.jpg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-zixun" aria-hidden="true"></i></p>
                                    <h3>&nbsp;一站式打造智能库房</h3>
                                    <div class="txt">中央控制系统对档案库房、密集柜智能管理统一控制，为您打造一站式智慧库房。</div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636620669922684354.jpg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-purchase" aria-hidden="true"></i></p>
                                    <h3>智能化档案资料管理</h3>
                                    <div class="txt">系统集成档案管理系统，取放一体化管理，实现档案有序存放，有序管理。</div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636627767221708903.jpg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-gongyiliucheng" aria-hidden="true"></i></p>
                                    <h3>全新结构 更稳固</h3>
                                    <div class="txt">花都密集柜不断突破各种新技术&nbsp; &nbsp; &nbsp;</div>
                                    <div class="txt">&nbsp; 整齐排列杜绝倾斜。</div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636620667944080431.jpg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-guizi" aria-hidden="true"></i></p>
                                    <h3>卡槽式拼接 易安装</h3>
                                    <div class="txt">
                                        密集柜架体无螺丝结构，卡槽式安装
                                    </div>
                                    <div class="txt">打破传统安装工艺。</div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636620652407353020.jpg">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="desc module" contenteditable="false" spellcheck="false">
                                    <p class="icon"><i class="alifont hd-liushuixian" aria-hidden="true"></i></p>
                                    <h3>智能车间 全自动流水线</h3>
                                    <div class="txt">花都集团先进生产力 产量保障
                                    </div>
                                    <div class="txt">每一台产品都是标准化。
                                    </div>
                                    <div class="zoom no-show">
                                        <img src="/home/static/images/636620652613387233.jpg">
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="module" data-id="8c7783c4-4e37-cbbf-10a2-08d54b9457ad" contenteditable="false" spellcheck="false"
             style="padding-bottom: 43.7962px;">
            <div class="container">
                <div class="big-title-2" style="margin-top:3rem;margin-bottom:2rem;">
                    <h2>密集柜资讯</h2>
                    <hr>
                    <p style="width:25%;; background-color:#ffffff;">COMPANY NEWS</p>
                </div>
            </div>

            <div class="container" style="padding-bottom:1.5rem;">
                <div class="related-news-box">
                    <div class="left-box data-module caseornews"
                         data-json="{&quot;tagId&quot;:&quot;智能密集柜&quot;,&quot;siteIndex&quot;:&quot;0&quot;,&quot;tagType&quot;:&quot;1&quot;}"
                         data-template="DataModule/News5-7-Left" contenteditable="false">
                        <div class="swiper-container swiper-xwzx" data-effect="fade">
                            <div class="swiper-wrapper">
                                @foreach($news as $k=>$v)
                                    @if($k<=3)
                                        <div class="swiper-slide" data-tag="{{ $v->title }}">
                                            <div class="box">
                                                <div class="cl">
                                                    <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}"
                                                         title="{{ $v->title }}">
                                                </div>
                                                <div class="cr">
                                                    <h4>{{ $v->title }}</h4>
                                                    <p>{{ $v->desc }}</p>
                                                    <a href="/news/{{ $v->id }}">查看详情</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="right-box data-module caseornews"
                         data-json="{&quot;tagId&quot;:&quot;智能密集柜&quot;,&quot;siteIndex&quot;:&quot;0&quot;,&quot;tagType&quot;:&quot;1&quot;}"
                         data-template="DataModule/News5-7-Right" contenteditable="false">
                        <div class="news-list-wrap">
                            <div class="news-list">
                                <ul class="cat cat-1">
                                    @foreach($news as $k=>$v)
                                        @if($k>3)
                                            <li><a class="link" href="/news/{{ $v->id }}">
                                                    <i class="fa fa-link" aria-hidden="true"></i><span>{{ $v->title }}</span></a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="/news" title="更多新闻" class="more-link">更多新闻</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="module" spellcheck="false" data-id="96ea4088-8cf8-c7c9-5ccc-08d5ca92565a"
             style="padding-bottom: 1.57813px; padding-top: 34.2216px;" contenteditable="false">
            <div class="container">
                <div class="icon-list-4">
                    <ul>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611190831314753.png">
                                </div>
                                <div class="text">
                                    <p class="title">质量检测报告</p>
                                    <p class="desc">通过多项高质量检测认证</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611191301617767.png" class="">
                                </div>
                                <div class="text">
                                    <p class="title">国际知名品牌</p>
                                    <p class="desc">省商务厅、科技厅、郑州海关等联合颁发</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611191355347920.png">
                                </div>
                                <div class="text">
                                    <p class="title">河南名牌</p>
                                    <p class="desc">品牌战略推进委员会颁发</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611191403794744.png">
                                </div>
                                <div class="text">
                                    <p class="title">中国环境标志产品认证证书</p>
                                    <p class="desc">十环认证，家具行业环保权威认证</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="module" spellcheck="false" data-id="b071b044-b92b-c89b-57b4-08d5ca925f33"
             style="padding-bottom: 46.4063px; padding-top: 29.0938px;" contenteditable="false">
            <div class="container">
                <div class="icon-list-4">
                    <ul>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611193240415887.png">
                                </div>
                                <div class="text">
                                    <p class="title">ISO质量体系认证</p>
                                    <p class="desc">全面通过ISO9001</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611193301372869.png">
                                </div>
                                <div class="text">
                                    <p class="title">著名商标</p>
                                    <p class="desc">工商总局颁发</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611193345874860.png">
                                </div>
                                <div class="text">
                                    <p class="title">政府定点采购企业</p>
                                    <p class="desc">省政府家具定点采购单位</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="img">
                                    <img src="/home/static/images/636611193398209098.png">
                                </div>
                                <div class="text">
                                    <p class="title">科技小巨人企业</p>
                                    <p class="desc">重产品科研，科技厅颁发</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="module layout-control" data-id="780e0137-e7c2-c310-a0b2-08d54b945663" contenteditable="false"
             spellcheck="false">
            <div class="container" contenteditable="false">
                <div class="row" data-row="">
                    <div class="col-md-6 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                    </div>
                    <div class="col-md-6 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="module layout-control" data-id="bcfe2467-ac35-c5e7-4542-08d54b945698" contenteditable="false"
             spellcheck="false">
            <div class="container" contenteditable="false">
                <div class="row" data-row="">
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="module layout-control" data-id="bcfe2467-ac35-c5e7-4542-08d54b945698">
            <div class="container" contenteditable="false">
                <div class="row" data-row="">
                    <div class="col-md-4 placeholder" data-col="">
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                    </div>
                </div>
            </div>
        </div>
        <div class="module layout-control" data-id="bcfe2467-ac35-c5e7-4542-08d54b945698" contenteditable="false"
             spellcheck="false">
            <div class="container" contenteditable="false">
                <div class="row" data-row="">
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                        <div class="module" spellcheck="false" data-id="e8f8884f-5ddf-cc0a-5a6b-08d554e22fa4"
                             contenteditable="false" style="padding-bottom: 0px;">
                            <div class="button-1 container" style="text-align:center">
                                <a href="http://www.lyhuadu.com/product/73.html" class="btn btn-primary"
                                   custom-class="">点击查看智能密集架详细参数</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="drag-helper no-show"></div>
                        <div class="module" spellcheck="false" data-id="e8f8884f-5ddf-cc0a-5a6b-08d554e22fa4"
                             contenteditable="false">
                            <div class="button-1 container" style="text-align:center">
                                <a href="www.lyhuadu.com/huizhuangui" class="btn btn-primary" custom-class="">点击查看自动选层密集柜</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 placeholder" data-col="">
                        <div class="module" spellcheck="false" data-id="e8f8884f-5ddf-cc0a-5a6b-08d554e22fa4"
                             contenteditable="false">
                            <div class="button-1 container" style="text-align:center">
                                <a href="http://www.lyhuadu.com/product/71.html" class="btn btn-primary"
                                   custom-class="">点击查看手动密集架详细参数</a>
                            </div>
                        </div>
                        <div class="drag-helper no-show"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection