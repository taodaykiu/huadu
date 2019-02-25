@extends('home.common')
@section('title', '文件柜厂家招标支持_ 26年文件柜品牌-花都文件柜')
@section('body', 'gcdz-page')


@section('content')

    <script src="/home/static/js/jquery.js"></script>


    <link href="/home/static/css/bootstrap3.css" rel="stylesheet"/>

    <script src="/home/static/js/bootstrap3.js"></script>


    <link href="/home/static/css/swiper.css" rel="stylesheet"/>

    <script src="/home/static/js/swiper.js"></script>


    <link href="/home/static/css/style.min.css" rel="stylesheet" type="text/css"/>
    <link href="/home/static/css/iconfont.css" rel="stylesheet" type="text/css"/>

    <link href="/home/static/css/gcdz.min.css" rel="stylesheet" type="text/css"/>
    <link href="/home/static/css/module.min.css" rel="stylesheet" type="text/css"/>
    <div class="container-fluid">

        <div class="row module module-1">
            <img src="/home/static/images/20170616024715948.jpg"/>
        </div>

        <div class="row module module-2">
            <div class="row big-title">
                <p class="cn">工程定制 花都更专业</p>
                <p class="en">CUSTOM MADE PROJECTS ARE MORE PROFESSIONAL</p>
            </div>

            <div class="container">
                <ul class="content">
                    <li class="mod01">
                        <img src="/home/static/images/01.jpg"/>
                        <h4>选择供应商，大品牌才放心</h4>
                        <p>中国钢制家具行业典范，国际一线品牌供应商，拥有河南名牌、河南省国际知名品牌等众多荣誉。
                        </p>
                    </li>
                    <li class="mod02">
                        <img src="/home/static/images/02.jpg"/>
                        <h4>不只有好价格，服务更全面</h4>
                        <p>花都27年只做优质钢柜，产品热销欧美，全球用户共同见证！国际品质，厂家直销价格，全国服务网络。</p>
                    </li>
                    <li class="mod03">
                        <img src="/home/static/images/03.jpg"/>
                        <h4>工程采购太麻烦？我们帮您搞定！</h4>
                        <p>上万工程承接经验，专业设计，免费预算。行业健全资质，数十项荣誉，办公家具工程配套优质供应商。</p>
                    </li>
                </ul>
            </div>
            <div style="margin:2rem 0; text-align:center;"><a class="sq-call sq-call-1" data-msg-id="33">咨询定制</a></div>
        </div>

        <div class="row module">
            <div class="ad-blue">
                <h2>27年专注钢柜定制 更专业</h2>
                <p>26 YEARS FOCUSED ON STEEL TANK CUSTOM</p>
            </div>
        </div>

        <div class="row module module-3">

            <div class="container dz-fangan-box">
                <img src="/home/static/images/n_gcdz_img_02.jpg"/>
                <div class="text">
                    <h2>专业定制解决方案</h2>
                    <i></i>
                    <p>
                        用户时代，个性化定制需求越来越高。花都不断增加设计投入，对钢柜定制优化升级践行了很多的努力和挑战。花都拥有敢于创新的资深设计团队，为客户量身定制人性化的钢制柜，也敢于挑战各种令人头疼的复制图纸</p>
                </div>
                <a href="#" class="sq-call sq-call-1" data-msg-id="34">我要定制</a>
            </div>

        </div>


        <div class="row module module-4">
            <div class="row big-title">
                <p class="cn">部分定制产品展示</p>
                <p class="en">SOME OEM PRODUCTS SHOW</p>
            </div>

            <div class="container-fluid">
                <div class="swiper-container swiper-oem-show" data-spacebetween="30" data-slidesperview="5"
                     data-effect="slide" data-nextbutton=".swiper-button-next" data-prevbutton=".swiper-button-prev">
                    <div class="swiper-wrapper">
                        @foreach(\App\Ggdz::orderBy('created_at','desc')->get() as $v)
                            <div class="swiper-slide">
                                <img src="/uploads/{{ $v->image }}"/>
                                <p>{{ $v->name }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>


        <div class="row module">
            <div class="ad-blue">
                <h2>丰富的工程经验 更放心</h2>
                <p>RICH ENGINEERING EXPERIENCE</p>
            </div>
        </div>

        <div class="row module module-5">

            <div class="container">
                <a href="/case"><img src="/home/static/images/n_gcdz_img_05.jpg"/></a>
            </div>

            <div class="title-blue">
                <p>上万工程承接经验，专业工程团队全面服务</p>
            </div>

            <div class="pic-box">
                <img src="/home/static/images/n_gcdz_img_06.jpg"/>
            </div>

            <div class="title-blue">
                <p>招投标支持/健全资质/数十项荣誉/高中标率</p>
            </div>

            <div class="pic-box">
                <img src="/home/static/images/n_gcdz_img_07.jpg"/>
            </div>

            <div class="title-blue">
                <p style="padding-left:7rem; padding-right:7rem;">专业工程团队全面服务 国际一线品牌供应商</p>
            </div>


            <div class="container">
                <ul class="text-list-1">
                    <li><p>花都27年创业大牌，年产值30万件，全球用户共同见证；</p></li>
                    <li><p>花都做专业的钢制家具;国际一线品牌供应商；</p></li>
                    <li><p>花都致力于现代化钢制家具生产、销售于一体的企业，企业通过了ISO9001、ISO14001 和ISO18001认证及十环认证，五星售后认证。</p></li>
                </ul>
            </div>


        </div>


        <div class="row module">
            <div class="ad-blue">
                <h2>全面的工程定制服务 更省心</h2>
                <p>RICH ENGINEERING EXPERIENCE</p>
            </div>
        </div>


        <div class="row module module-6">

            <div class="container">
                <div class="pic-box left">
                    <div class="text">
                        <h2>招投标全程支持</h2>
                        <hr/>
                        <p>专业项目经理一对一服务<br/>招投标全程跟踪支持<br/>健全资质高中标率</p>
                    </div>
                    <div class="pic">
                        <img src="/home/static/images/n_gcdz_img_08.jpg"/>
                    </div>
                </div>

                <div class="pic-box right">
                    <div class="text">
                        <h2>资深设计团队</h2>
                        <hr/>
                        <p>善于分析客户需求<br/>善于应对各种复杂图纸<br/>做出令客户满意的方案</p>
                    </div>
                    <div class="pic">
                        <img src="/home/static/images/n_gcdz_img_10.jpg"/>
                    </div>
                </div>

                <div class="pic-box left">
                    <div class="text">
                        <h2>快速打样</h2>
                        <hr/>
                        <p>花都拥有先进激光切割机48小时快速打样，高效省时。</p>
                    </div>
                    <div class="pic">
                        <img src="/home/static/images/n_gcdz_img_11.jpg"/>
                    </div>
                </div>

                <div class="pic-box right">
                    <div class="text">
                        <h2>免费制作配套方案</h2>
                        <hr/>
                        <p>免费制作配套方案、免费预算<br/>专业设计；专业生产线，<br/>快速完成您的项目</p>
                    </div>
                    <div class="pic">
                        <img src="/home/static/images/n_gcdz_img_12.jpg"/>
                    </div>
                </div>
            </div>


        </div>

        <div class="row module">
            <div class="ad-blue">
                <h2>强大的生产实力 交货保障</h2>
                <p>STRONG PRODUCTION STRENGTH</p>
            </div>
        </div>

        <div class="row module module-7">

            <div class="pic-box">
                <img src="/home/static/images/n_gcdz_img_13.jpg"/>
            </div>

            <div class="title-blue">
                <p>品控、快速、高效、低耗 快速生产杜绝次品</p>
            </div>

            <div class="pic-box">
                <img src="/home/static/images/n_gcdz_img_17.jpg"/>
            </div>


            <div class="title-blue">
                <p>流水线车间，日产1000台钢柜，保证按期交货</p>
            </div>

            <div class="pic-box">
                <img src="/home/static/images/n_gcdz_img_18.jpg"/>
            </div>

            <div class="title-blue title-blue-1">
                <p>大批量生产下，严格把控细节，保证每一台钢柜的质量</p>
            </div>

            <p style="color:#777777;font-size:0.75rem; text-align:center;">Mass production, strictly control the
                details, to
                ensure the quality of each steel cabinet</p>


        </div>


        <div class="row module">
            <div class="ad-blue">
                <h2>工程定制流程 采购全程跟踪</h2>
                <p>ENGINEERING PURCHASING PROCESS</p>
            </div>
        </div>

        <div class="row module module-8">
            <div class="container">
                <div class="content">
                    <div class="desc">
                        <div class="icon-box"><img src="/home/static/images/dwcg_img_04.jpg"/></div>
                        <a href="#" class="sq-icon"><img src="/home/static/images/dwcg_img_04_1.jpg"/></a>
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

                <div class="content contact">
                    <div class="left">
                        <p class="p1">客服电话</p>
                        <p class="p2">400-6668-369</p>
                        <p class="p1">24小时</p>
                        <a href="" class="sq-call sq-call-2" data-msg-id="35">给您回电</a>
                        <a href="" class="sq-call sq-call-3" data-msg-id="36">在线客服</a>
                    </div>
                    <div class="right">
                        <p class="p1">参观洽谈</p>
                        <p class="p2">花都工厂欢迎您参观考察</p>
                        <p class="p3">花都集团位于中国钢制家具生产基地-洛阳伊滨</p>
                        <p class="p1">集团总部地址：中国洛阳市洛龙区庞树工业园</p>
                    </div>
                </div>


            </div>


        </div>

        <div class="row module module-9">

            <div class="container">

                <div class="sq-call-group">
                    <a class="sq-call" data-msg-id="37">单位采购<i class="fa fa-comments" aria-hidden="true"></i></a>
                    <a class="sq-call" data-msg-id="38">招标支持<i class="fa fa-comments" aria-hidden="true"></i></a>
                    <a class="sq-call" data-msg-id="39">OEM ODM<i class="fa fa-comments" aria-hidden="true"></i></a>
                    <a class="sq-call" data-msg-id="40">外贸出口<i class="fa fa-comments" aria-hidden="true"></i></a>
                </div>

            </div>

        </div>


    </div>

    <script>
      //公共代码
      jQuery(document).ready(function ($) {

        //初始化轮播效果
        $('.swiper-container').each(function (index, element) {

          if ($(this).data('swiper-auto-disabled')) {
            return;
          }

          var $this = $(element);

          var default_params = {
            pagination: null,
            paginationClickable: true,
            autoplay: 2000,
            effect: 'fade',
            autoplayDisableOnInteraction: false,
            touchMoveStopPropagation: true,
            touchReleaseOnEdges: false,
            speed: 600,
            loop: true,
            prevButton: null,
            slidesPerColumn: 1,
            slidesPerView: 1,
            nextButton: null,
            spaceBetween: 0,
            roundLengths: false,

          };


          for (var item in default_params) {
            var v = $this.data(item.toLowerCase());
            if (typeof v !== 'undefined') {
              default_params[item] = v;
            }
          }

          $this.data('swiper', new Swiper($this[0], default_params));

          if (!$this.data('mousestop')) {
            $this.on('mouseenter', function (e) {
              $this.data('swiper').stopAutoplay();
            }).on('mouseleave', function (e) {
              $this.data('swiper').startAutoplay();
            });
          }


        });


        //初始化鼠标放上去自动显示Tab
        $('[data-over-show-tab=\'true\']').on('mouseenter', 'li', function (e) {
          $(this).find('a').click();
        });


      });
    </script>
@endsection
