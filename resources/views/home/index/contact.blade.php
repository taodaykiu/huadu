
@extends('home.common')
@section('title', '花都集团_花都办公家具官网_联系花都')
@section('body', 'contact-page')


@section('content')
    <link href="/home/static/css/about.min.css" rel="stylesheet" type="text/css" />


    <!--Home Body-->
    <div class="container-fluid">
        <div class="module module-1">
            <img src="/home/static/images/lx.png" />
            <div class="container">
                <div class="txt">
                    <div class="c1">
                        <p class="en">CONTACT US</p>
                        <p class="ch">联系我们</p>
                    </div>
                    <div class="c2">
                        <p>
                            STRONG TECHNICAL FORCE<br />
                            ADVANCED EQUIPEMENT<br />
                            STRICT QUALTY MANAGEMENT SYSTEM<br />
                            PROFESSIONAL SERVICES<br />
                            COMPETITIVE PRICE
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="module module-2">
            <div class="container">
                <h2>联系我们</h2>
                <div class="txt">
                    尊敬的访客，当您进入“联系花都”页面时，您已成为花都最尊贵的客户。您的来访是对我们最大的支持，真诚欢迎您的莅临！花都27年专注钢制办公家具的生产、研发和销售，致力于把更好的钢柜销往全世界！
                </div>
            </div>
        </div>

        <div class="module module-3">
            <div class="container">
                <div class="row" style="margin-bottom:30px;">
                    <div class="col-md-8">
                        <h3 style="font-size:32px;">全国热线：{{ $sys->tel }}</h3>
                    </div>
                    <div class="col-md-4">
                        <a class="sq-call sq-call-1" style="display:inline-block;margin-left:40px;" href="#"><i class="fa fa-comments" aria-hidden="true"></i>点击咨询</a>
                    </div>
                    <div class="col-md-12">
                        <div class="dashed" style="margin-bottom:60px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <h3>外贸公司</h3>
                        <p>地址：西工区中州中路459号数码大厦A座1008　</p>
                        <p>EXPORTS DEPARTMENT　<i class="fa fa-phone-square" aria-hidden="true"></i> : 151-3639-9900<br />　</p>

                        <h3>集团总部</h3>
                        <p>地址：中国市洛龙区庞村镇花都国际园</p>
                        <p>电话：15890018766</p>
                        <p>传真：0379-67501333    邮箱：{{ $sys->qq }}@qq.com</p>
                        <p>全国招商专线：150-3634-9999 （周经理）</p>
                        <p>花都人才招聘：185-3999-0563 （张经理）<br /></p>
                    </div>
                    <div class="col-md-5">
                        <div class="pic"><img src="/home/static/images/lx2.png" /></div>
                        <p class="align-center">花都工厂</p>
                    </div>
                    <div class="col-md-12">
                        <div class="dashed" style="margin-bottom:50px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h3>花都各地服务商</h3>
                        <p>地址：全国各大城市均有服务商，详情咨询在线客服<br />　</p>

                        <h3>河南销售总部</h3>
                        <p>地址:郑州市金水路与东风南路绿地原盛国际1号楼1039</p>
                        <p>电话：0371-65356898　　业务经理：15890018766</p>
                        <p>售后电话：15515508168<br /></p>
                    </div>
                    <div class="col-md-5">
                        <div class="pic"><img src="/home/static/images/lx3.jpg" /></div>
                        <p class="align-center">花都门店</p>
                    </div>
                    <div class="col-md-12">
                        <div class="dashed" style="margin-bottom:60px;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 lfxl">
                        <h3>来访线路</h3>
                        <h4>如需要，可派专员前往接送，接送电话：0379-67509999 / 15890018766</h4>
                        <p><span class="red">1，机场</span>--83路/15站/50分钟--纱厂路解放路口站下--61路/9站/30分钟--师范学院站下--93路/28站/1小时40分--窑沟站下--向东步行200米到达</p>
                        <p><span class="red">2，洛偃高速路口</span>--伊洛大道洛偃快速通道口南站--93路/15站/50分钟--窑沟站下--向东步行200米到达</p>
                        <p><span class="red">3，龙门高铁站</span>--901路/907路/1小时20分钟--花都国际园下</p>
                        <p><span class="red">4，火车站</span>--81路/11站/40分钟--风湿病医院站下--93路/26站/1小时40分--窑沟站下--向东步行200米到达</p>
                        <p><span class="red">5，郑州高铁站或新郑机场</span>--来之前请致电15890018766，郑州销售部专人接站，陪同前往郑州销售部或工厂</p>
                    </div>
                    <div class="col-md-12">
                        <div class="dashed" style="margin-bottom:50px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="module module-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/home/static/images/qr (1).jpg" />
                        <h3 class="p1">花都微信订阅号</h3>
                        <p class="p2">钢制办公家具咨询 / 花都业务故事 / 花都最新动态</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/home/static/images/qr (2).jpg" />
                        <h3 class="p1">花都微信服务号</h3>
                        <p class="p2">售后登记快速报修 / 产品图册新品信息 / 全国门店查询</p>
                    </div>
                </div>
                <div class="dashed"></div>
            </div>
        </div>

        <div class="module module-5">
            <div class="container">
                <div class="title">
                    <h2>来厂地图</h2>
                    <p></p>
                </div>
                <div id="gaode-map">

                </div>
                <div style="display:none" class="mark-box-wrap">
                    <div class="mark-box">
                        <div class="title">花都集团</div>
                        <div class="content">
                            <p>
                                简介：中国钢制家具领导品牌，中国十大钢制家具厂家，中国钢制家具领导品牌
                                <br>地址：中国·河南·市伊滨区花都国际园
                                <br>电话：{{ $sys->tel }} 0379-67509999  15890018766
                                <br>网址：https://www.lyhuadu.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="/home/static/js/maps.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var map = new AMap.Map('gaode-map', {
                resizeEnable: true,
                zoom: 16,
                center: [112.66862, 34.626094]
            });

            map.clearMap();
            var marker = new AMap.Marker({
                map: map,
                position: [112.66862, 34.626094]
            });

            var infoWindow = new AMap.InfoWindow({
                isCustom: true,  //使用自定义窗体
                content: $('.mark-box-wrap>.mark-box')[0],
                offset: new AMap.Pixel(16, -45)
            });

            infoWindow.open(map, marker.getPosition());

        });
    </script>
    @endsection