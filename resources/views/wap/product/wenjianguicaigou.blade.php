@extends('home.common')

@section('title', '河南办公家具厂家_中国27年钢制办公家具品牌-花都钢木办公家具')
@section('body', 'dwcg-page')


@section('content')

    <link href="/home/static/css/dwcg.min.css" rel="stylesheet" type="text/css" />

    <link href="/home/static/css/module.css" rel="stylesheet"/>

    <script src="/home/static/js/module.js"></script>



    <div class="container-fluid">

        <div class="row module module-1">
            <img src="/home/static/images/1.jpg" />
        </div>

        <div class="row module module-2">
            <div class="row big-title">
                <p class="cn">我们的优势</p>
                <p class="en">OUR ADVANTAGE POINT</p>
            </div>

            <div class="container">
                <ul class="content">
                    <li class="mod01">
                        <img src="/home/static/images/01.jpg" />
                        <h4>选择供应商，大品牌才放心</h4>
                        <p>中国钢制家具优质品牌，国际一线品牌供应商，拥有河南名牌、国际知名品牌等众多荣誉。</p>
                    </li>
                    <li class="mod02">
                        <img src="/home/static/images/02.jpg" />
                        <h4>不只有好价格，服务更全面</h4>
                        <p>花都27年只做优质钢柜，产品热销欧美，全球用户共同见证！国际品质，厂家直销价格，全国服务网络。</p>
                    </li>
                    <li class="mod03">
                        <img src="/home/static/images/03.jpg" />
                        <h4>工程采购太麻烦？我们帮您搞定！</h4>
                        <p>上万工程承接经验，专业设计，免费预算。行业全资质，数十项荣誉，办公家具工程配套优质供应商。</p>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row module module-3">
            <div class="container">
                <div class="nav">
                    <ul>
                        <li class="active"><a href="#dw-0" data-toggle="tab">企业单位</a></li>
                        <li><a href="#dw-1" data-toggle="tab">政府事业单位</a></li>
                        <li><a href="#dw-2" data-toggle="tab">医院用户</a></li>
                        <li><a href="#dw-3" data-toggle="tab">部&nbsp;&nbsp;队</a></li>
                        <li><a href="#dw-4" data-toggle="tab">图 书 馆</a></li>
                        <li><a href="#dw-5" data-toggle="tab">学&nbsp;&nbsp;校</a></li>
                    </ul>
                    <div class="line"><i></i></div>
                </div>
                <div class="tab-content list-box">
                    <div class="tab-pane active" id="dw-0">


                        <div class="row big-title">
                            <p class="cn">合适企业单位的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="3" id="tid-3">
                                            <ul>
                                                @foreach(\App\Product::where('level1',89)->orderBy('created_at','desc')->get() as $v)
                                                <li>
                                                    <a href="/product/{{ $v->id }}" target="black">
                                                        <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-43">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000309776179.jpg" alt="东风本田" title="东风本田" style="max-width:100px; max-height:100px;" /></div>
                                            <p>东风本田</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000310225371.jpg" alt="齐鲁制药厂" title="齐鲁制药厂" style="max-width:100px; max-height:100px;" /></div>
                                            <p>齐鲁制药厂</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000315381778.jpg" alt="兰州银行" title="兰州银行" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州银行</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000326358474.png" alt="徐工集团重型有限公司" title="徐工集团重型有限公司" style="max-width:100px; max-height:100px;" /></div>
                                            <p>徐工集团重型有限公司</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000336387569.jpg" alt="中国电信河南分公司" title="中国电信河南分公司" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国电信河南分公司</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000331358402.jpg" alt="郑州华南城" title="郑州华南城" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州华南城</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000311094888.jpg" alt="中国移动河南分公司" title="中国移动河南分公司" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国移动河南分公司</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000310371921.jpg" alt="兰州石油化工公司" title="兰州石油化工公司" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州石油化工公司</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000321446150.jpg" alt="中国航天研究一院" title="中国航天研究一院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国航天研究一院</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',1)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                <div class="swiper-slide">
                                                    <div class="title">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                        <hr />
                                                    </div>
                                                    <div class="content">
                                                        <div class="thumb">
                                                            <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                        </div>
                                                        <div class="title2">{{ $v->title }}</div>
                                                        <div class="desc">
                                                            {{ $v->desc }}
                                                        </div>
                                                        <div class="more">
                                                            <a href="/case">查看更多案例</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                    @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane" id="dw-1">


                        <div class="row big-title">
                            <p class="cn">合适政府事业单位的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="49" id="tid-49">
                                            <ul>
                                                @foreach(\App\Product::where('level1',90)->orderBy('created_at','desc')->get() as $v)
                                                    <li>
                                                        <a href="/product/{{ $v->id }}" target="black">
                                                            <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-45">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001021612194.jpg" alt="甘肃省国家税务局" title="甘肃省国家税务局" style="max-width:100px; max-height:100px;" /></div>
                                            <p>甘肃省国家税务局</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001026504771.jpg" alt="财政厅" title="财政厅" style="max-width:100px; max-height:100px;" /></div>
                                            <p>财政厅</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001031631664.jpg" alt="国家安全厅" title="国家安全厅" style="max-width:100px; max-height:100px;" /></div>
                                            <p>国家安全厅</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001051807453.jpg" alt="甘肃省政府" title="甘肃省政府" style="max-width:100px; max-height:100px;" /></div>
                                            <p>甘肃省政府</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001041797924.jpg" alt="湖北省财政厅" title="湖北省财政厅" style="max-width:100px; max-height:100px;" /></div>
                                            <p>湖北省财政厅</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001061963704.jpg" alt="郑州市委" title="郑州市委" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州市委</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001046797674.jpg" alt="兰州海关" title="兰州海关" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州海关</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442001036680433.jpg" alt="徐州市政府" title="徐州市政府" style="max-width:100px; max-height:100px;" /></div>
                                            <p>徐州市政府</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636444492009326793.jpg" alt="湖南省检察院" title="湖南省检察院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>湖南省检察院</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',2)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                    <div class="swiper-slide">
                                                        <div class="title">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                            <hr />
                                                        </div>
                                                        <div class="content">
                                                            <div class="thumb">
                                                                <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                            </div>
                                                            <div class="title2">{{ $v->title }}</div>
                                                            <div class="desc">
                                                                {{ $v->desc }}
                                                            </div>
                                                            <div class="more">
                                                                <a href="/case">查看更多案例</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane" id="dw-2">


                        <div class="row big-title">
                            <p class="cn">合适医院用户的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="50" id="tid-50">
                                            <ul>
                                                @foreach(\App\Product::where('level1',91)->orderBy('created_at','desc')->get() as $v)
                                                    <li>
                                                        <a href="/product/{{ $v->id }}" target="black">
                                                            <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-42">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999812579091.jpg" alt="人民医院" title="人民医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>人民医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999823282018.png" alt="郑州市第五人民医院" title="郑州市第五人民医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州市第五人民医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999825909066.jpg" alt="郑州大学第一附属医院" title="郑州大学第一附属医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州大学第一附属医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999830879628.jpg" alt="兰州大学第一医院" title="兰州大学第一医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州大学第一医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999848194392.jpg" alt="徐州市第一人民医院" title="徐州市第一人民医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>徐州市第一人民医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999858243097.png" alt="郑州市第三人民医院" title="郑州市第三人民医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州市第三人民医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999843194250.jpg" alt="肿瘤医院" title="肿瘤医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>肿瘤医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999838125930.jpg" alt="深圳市人民医院" title="深圳市人民医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>深圳市人民医院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441999853213963.jpg" alt="兰州军区兰州总医院" title="兰州军区兰州总医院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州军区兰州总医院</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',3)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                    <div class="swiper-slide">
                                                        <div class="title">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                            <hr />
                                                        </div>
                                                        <div class="content">
                                                            <div class="thumb">
                                                                <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                            </div>
                                                            <div class="title2">{{ $v->title }}</div>
                                                            <div class="desc">
                                                                {{ $v->desc }}
                                                            </div>
                                                            <div class="more">
                                                                <a href="/case">查看更多案例</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane" id="dw-3">


                        <div class="row big-title">
                            <p class="cn">合适部队的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="51" id="tid-51">
                                           <ul>
                                               @foreach(\App\Product::where('level1',92)->orderBy('created_at','desc')->get() as $v)
                                                   <li>
                                                       <a href="/product/{{ $v->id }}" target="black">
                                                           <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-44">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000639395427.jpg" alt="127师部队" title="127师部队" style="max-width:100px; max-height:100px;" /></div>
                                            <p>127师部队</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000654161293.jpg" alt="6880部队" title="6880部队" style="max-width:100px; max-height:100px;" /></div>
                                            <p>6880部队</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000649171048.jpg" alt="96251部队" title="96251部队" style="max-width:100px; max-height:100px;" /></div>
                                            <p>96251部队</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000674161473.jpg" alt="西部战区陆军（原兰州军区）" title="西部战区陆军（原兰州军区）" style="max-width:100px; max-height:100px;" /></div>
                                            <p>西部战区陆军（原兰州军区）</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000669161313.jpg" alt="中国人民解放军总政治部" title="中国人民解放军总政治部" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国人民解放军总政治部</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000679238975.jpg" alt="中国人民解放军总参谋部" title="中国人民解放军总参谋部" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国人民解放军总参谋部</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000664161069.jpg" alt="济南军械装甲部" title="济南军械装甲部" style="max-width:100px; max-height:100px;" /></div>
                                            <p>济南军械装甲部</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000644141347.jpg" alt="兰州军区保卫部" title="兰州军区保卫部" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州军区保卫部</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636442000659151428.jpg" alt="军分区" title="军分区" style="max-width:100px; max-height:100px;" /></div>
                                            <p>军分区</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',4)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                    <div class="swiper-slide">
                                                        <div class="title">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                            <hr />
                                                        </div>
                                                        <div class="content">
                                                            <div class="thumb">
                                                                <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                            </div>
                                                            <div class="title2">{{ $v->title }}</div>
                                                            <div class="desc">
                                                                {{ $v->desc }}
                                                            </div>
                                                            <div class="more">
                                                                <a href="/case">查看更多案例</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane" id="dw-4">


                        <div class="row big-title">
                            <p class="cn">合适图书馆的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="52" id="tid-52">
                                            <ul>
                                                @foreach(\App\Product::where('level1',93)->orderBy('created_at','desc')->get() as $v)
                                                    <li>
                                                        <a href="/product/{{ $v->id }}" target="black">
                                                            <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-40">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998979180451.jpg" alt="武汉科技大学" title="武汉科技大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>武汉科技大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998999454020.jpg" alt="郑州大学" title="郑州大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998999297765.jpg" alt="上海大学" title="上海大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>上海大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998994453984.jpg" alt="中国人民大学" title="中国人民大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国人民大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998989200289.jpg" alt="河南理工大学" title="河南理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>河南理工大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998994287988.jpg" alt="兰州大学" title="兰州大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998979317323.jpg" alt="武汉理工大学" title="武汉理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>武汉理工大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998984190404.jpg" alt="西亚斯国际学院" title="西亚斯国际学院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>西亚斯国际学院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998970909252.jpg" alt="南京理工大学" title="南京理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>南京理工大学</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',5)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                    <div class="swiper-slide">
                                                        <div class="title">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                            <hr />
                                                        </div>
                                                        <div class="content">
                                                            <div class="thumb">
                                                                <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                            </div>
                                                            <div class="title2">{{ $v->title }}</div>
                                                            <div class="desc">
                                                                {{ $v->desc }}
                                                            </div>
                                                            <div class="more">
                                                                <a href="/case">查看更多案例</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="tab-pane" id="dw-5">


                        <div class="row big-title">
                            <p class="cn">合适学校的产品</p>
                            <p class="en">SUITABLE FOR YOUR PRODUCTS</p>
                        </div>

                        <div class="row">

                            <div class="module design-module resizeable">

                                <div class="container product-bag">
                                    <div class="container data-module productbag">


                                        <div class="product-list" data-id="53" id="tid-53">
                                            <ul>
                                                @foreach(\App\Product::where('level1',94)->orderBy('created_at','desc')->get() as $v)
                                                    <li>
                                                        <a href="/product/{{ $v->id }}" target="black">
                                                            <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
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
                                    <div class="all-product-link">
                                        <a href="/ganggui">所有产品</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row big-title">
                            <p class="cn">相关案例</p>
                            <p class="en">RELATE CASE</p>
                        </div>

                        <div class="container data-module relatedcase" style="padding-bottom:1.5rem;">


                            <div class="case-box case-box-40">
                                <div class="left">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998979180451.jpg" alt="武汉科技大学" title="武汉科技大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>武汉科技大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998999454020.jpg" alt="郑州大学" title="郑州大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>郑州大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998999297765.jpg" alt="上海大学" title="上海大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>上海大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998994453984.jpg" alt="中国人民大学" title="中国人民大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>中国人民大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998989200289.jpg" alt="河南理工大学" title="河南理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>河南理工大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998994287988.jpg" alt="兰州大学" title="兰州大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>兰州大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998979317323.jpg" alt="武汉理工大学" title="武汉理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>武汉理工大学</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998984190404.jpg" alt="西亚斯国际学院" title="西亚斯国际学院" style="max-width:100px; max-height:100px;" /></div>
                                            <p>西亚斯国际学院</p>
                                        </div>
                                        <div class="logo">
                                            <div><img src="/home/static/images/636441998970909252.jpg" alt="南京理工大学" title="南京理工大学" style="max-width:100px; max-height:100px;" /></div>
                                            <p>南京理工大学</p>
                                        </div>
                                    </div>
                                    <hr class="r1" />
                                    <hr class="r2" />
                                    <hr class="c1" />
                                    <hr class="c2" />
                                </div>
                                <div class="right">
                                    <div class="anli-box">

                                        <div class="swiper-container swiper-anli">
                                            <div class="swiper-wrapper">
                                                @foreach(\App\Cases::where('cate_id',6)->orderBy('created_at','desc')->limit(4)->get() as $v)
                                                    <div class="swiper-slide">
                                                        <div class="title">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            <span>{{ $v->created_at->format('Y-m-d') }}</span>
                                                            <hr />
                                                        </div>
                                                        <div class="content">
                                                            <div class="thumb">
                                                                <img src="/uploads/{{ $v->thumb }}" alt="{{ $v->title }}" title="{{ $v->title }}" />
                                                            </div>
                                                            <div class="title2">{{ $v->title }}</div>
                                                            <div class="desc">
                                                                {{ $v->desc }}
                                                            </div>
                                                            <div class="more">
                                                                <a href="/case">查看更多案例</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>

        </div>

        <script>
            jQuery(document).ready(function ($) {

                $(".module-3 .nav").on("click", "li", function (e) {

                    var i = $(this).index();
                    var step = (100 / 6) * i + (100/24);

                    $(".module-3 .nav .line i").css("left", step + "%");
                });

                $(window).on("scroll", function (e) {

                    var $nav = $(".module-3 .nav");

                    var win_y = $(this).scrollTop();
                    var pos_y = $nav.parent().offset().top;

                    if (win_y > pos_y) {
                        $nav.addClass("fixed");
                    } else {
                        $nav.removeClass("fixed");
                    }
                });

            });
        </script>


        <div class="row module module-4">
            <div class="row big-title">
                <p class="cn">采购流程</p>
                <p class="en">PURCHASING PROCESS</p>
            </div>

            <div class="container">
                <div class="content">
                    <div class="title">
                        <i class="t1"></i>
                        <p class="t2 sq-call" data-msg-id="30">我要定制</p>
                        <i class="t3"></i>
                    </div>

                    <div class="desc">
                        <div class="icon-box"><img src="/home/static/images/dwcg_img_04.jpg" /></div>
                        <a href="#" class="sq-icon"><img src="/home/static/images/dwcg_img_04_1.jpg" /></a>
                        <div class="txt-box">
                            <span>在线咨询</span>
                            <span>设计图纸</span>
                            <span>签订合同</span>
                            <span>订单生产</span>
                            <span>发货配送</span>
                            <span>安装售后</span>
                        </div>
                    </div>
                </div>

                <div class="content" style="margin-top:4.5rem;">
                    <div class="title">
                        <i class="t1"></i>
                        <p class="t2">现货采购渠道</p>
                        <i class="t3"></i>
                    </div>
                    <div class="desc">
                        <table style="height: 123px; margin-left: auto; margin-right: auto;" width="1109"><tbody><tr style="height: 70px;"><td style="width: 360px; text-align: center; height: 70px;"><img src="/home/static/images/636379746605446024.jpg" />各地服务商</td><td style="width: 363px; text-align: center; height: 70px;"><img style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;" src="/home/static/images/636379746605446024.jpg" /><span style="color: #000000;"><span style="letter-spacing: normal; background-color: #ffffff;">集团工厂</span></span></td><td style="width: 364px; text-align: center; height: 70px;"><img style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;" src="/home/static/images/636379746605446024.jpg" /><span style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">郑州销售中心</span></td></tr><tr style="height: 70px;"><td style="width: 360px; text-align: center; height: 70px;"><span style="font-size: 12pt;">各地服务商送货上门</span></td><td style="width: 363px; text-align: center; height: 70px;"><span style="font-size: 12pt;">工厂整车发货</span></td><td style="width: 364px; text-align: center; height: 70px;"><span style="font-size: 12pt;">郑州物流基地发货</span></td></tr></tbody></table>
                        <div style="margin-top:1.5rem;"><a class="sq-call sq-call-1" data-msg-id="31">直接采购</a></div>
                    </div>
                </div>
                <div class="content" style="margin-top:4.5rem;">
                    <div class="title">
                        <i class="t1"></i>
                        <p class="t2">工厂参观</p>
                        <i class="t3"></i>
                    </div>
                    <div class="desc">
                        <p>&nbsp;</p>
                        <table style="height: 46px; margin-left: auto; margin-right: auto;" width="164">
                            <tbody>
                            <tr>
                                <td style="width: 74px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/home/static/images/636379830488353852.png" /></td>
                                <td style="width: 74px;"><span style="color: #ff4242;">伊滨</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><span style="color: #303030; font-family: 'Microsoft YaHei', 宋体, simsun, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">钢制家具生产基地，欢迎来花都国际园参观考察</span></p>
                        <p style="text-align: center;">&nbsp;</p>
                        <p style="text-align: center;"><span style="color: #303030; font-family: 'Microsoft YaHei', 宋体, simsun, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><img src="/home/static/images/636379832373311665.jpg" /></span></p>
                        <div style="margin:2rem 0;"><a class="sq-call sq-call-1" data-msg-id="32">预约接待</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection