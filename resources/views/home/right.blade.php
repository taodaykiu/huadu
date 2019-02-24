<div class="right-side">


    <ul class="nav side-new-nav">
        <li class="active"><a href="#huadutoutiao" data-toggle="tab">花都头条</a></li>
        <li><a href="#tuijiananli" data-toggle="tab">推荐案例</a></li>
    </ul>

    <div class="tab-content list-box">
        <div class="tab-pane active in" id="huadutoutiao">
            <ul class="side-news-list">
                @foreach($hdtt as $k=>$v)
                <li data-tag="15"><a title="配送系统全新升级，花都速运就是快！" href="/news/{{ $v->id }}"><i>{{ $k+1 }}</i>{{ $v->title }}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="tab-pane" id="tuijiananli">
            <ul class="side-news-list">
                @foreach($tjal as $k=>$v)
                <li><a title="{{ $v->title }}" href="/case/{{ $v->id }}"><i>{{ $k+1 }}</i>{{ $v->title }}</a></li>
               @endforeach
            </ul>
        </div>
    </div>

    <div class="hot-news">
        <p class="t1">热门搜索</p>
        <ul class="news-list">
            @foreach($hot_search as $v)
            <li data-tag="51"><a title="{{ $v->title }}" href="/news/{{ $v->id }}">{{ $v->tag }}</a></li>
            @endforeach

        </ul>
    </div>

    <div class="pic-hot-news">
        <div class="swiper-container" data-slidesperview="1" data-effect="slide" data-pagination=".swiper-pagination">
            <div class="swiper-wrapper">
                @foreach($hot_search as $v)
                <div class="swiper-slide" data-tag="16">
                    <a href="/news/{{ $v->id }}" class="img"><img src="/uploads/{{ $v->thumb }}" /></a>
                    <div class="txt">{{ $v->title }}</div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

</div>