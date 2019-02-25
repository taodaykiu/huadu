<footer class="footer-box" id="footer-box">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col r1">

            <div class="flex">
                <div class="left" style="width:60%;">
                    <h3><span class="cn">花都</span><span class="en">HUADU</span></h3>
                    <p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i>总部：{{ $sys->address }}　　<br/><i class="fa fa-map-marker" aria-hidden="true"></i>全国：各地均有服务商<br/>电话：400-6668-369</p>
                </div>
                <div class="right" style="width:40%; padding:10px 20px">
                    <div class="qrcode">
                        <img style="width:100%;" src="/wap/static/images/ewm22.jpg"/>
                    </div>
                </div>
            </div>

            <div class="flex">
                <a href="tel:{{ $sys->tel }}" class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> 点击直接拨打</a>
                <a href="#" class="sq-call"><i class="fa fa-weixin" aria-hidden="true"></i> 在线联系客服</a>
            </div>

        </div>
        <div class="mdl-cell mdl-cell--12-col r2">
            <ul class="flex">
                <li><a href="/ganggui">产品中心</a></li>
                <li><a href="/about">了解花都</a></li>
                <li><a href="/ggdz">生产定制</a></li>
            </ul>
            <ul class="flex" style="justify-content:center; padding-top:10px;">
                <li><a href="/zsjm">代理合作</a></li>
            </ul>
        </div>
        <div class="mdl-cell mdl-cell--12-col r3">
            <a href="javascript:void(0)">Copyright @ {{ $sys->gs }} 2017</a>
        </div>
    </div>
</footer>
