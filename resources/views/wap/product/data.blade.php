@extends('wap.common')

@section('title', $data->title.'_花都集团_中国大型货架厂家')
@section('body', 'product-page')


@section('content')



    <main id="main" class="mdl-layout__content">
        <div class="page-content">

            <!--轮播图-->
            <div class="swiper-container swiper-product" data-effect="slide" data-roundlengths="true"
                 data-pagination=".swiper-pagination" data-autoplay="4000" data-mousestop="true">
                <div class="swiper-wrapper">

                    @foreach($data->images as $v)
                        <div class="swiper-slide">
                            <img src="/uploads/{{ $v }}" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!--产品信息-->
            <div class="panel-box product-info-box" style="margin-top:0;">
                <div class="row">
                    <ul>
                        <li>
                            <a href="/ganggui/{{ \App\Cate::find($data->level2)['id']  }}">{{ \App\Cate::find($data->level2)['name']  }}</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-angle-right" aria-hidden="true"></i> {{ $data->title }}
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="p1">
                        <span class="r1">品牌：{{ $data->pp }}</span>
                        <span class="r2">颜色：{{ $data->ys }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="p4">规格：{{ $data->gg }}</div>
                </div>
                <div class="row">
                    <div class="p5">
                        <p>特点：</p>
                        <div><p>@foreach(explode('|',$data->td) as $v)<p>{{ $v }}</p>@endforeach</div>
                    </div>
                </div>
            </div>

            <!--产品详情-->
            <div class="panel-box product-desc-box">
                <ul class="product-desc-nav">
                    <li class="active">
                        <a href="#product-desc-box" data-toggle="tab">产品详情</a>
                    </li>
                    <li class="">
                        <a href="#product-anzhuang-box" data-toggle="tab">生产定制</a>
                    </li>
                    <li class="">
                        <a href="#product-peisong-box" data-toggle="tab">产品配送</a>
                    </li>
                </ul>
                <div class="line"></div>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="product-desc-box">
                         {!! $data->data !!}
                    </div>
                    <div class="tab-pane fade" id="product-anzhuang-box">
                        <img src="/wap/static/images/youshi1.jpg"/>
                        <img src="/wap/static/images/youshi2.jpg"/>
                        <img src="/wap/static/images/youshi3.jpg"/>
                        <img src="/wap/static/images/youshi4.jpg"/>
                        <img src="/wap/static/images/youshi5.jpg"/>
                    </div>
                    <div class="tab-pane fade" id="product-peisong-box">
                        <img src="/wap/static/images/peisong.jpg"/>
                    </div>
                </div>
            </div>

        </div>
        @include('wap.right')
    </main>

@endsection
