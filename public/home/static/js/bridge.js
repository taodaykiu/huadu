Date.prototype.Format = function (fmt) {
    var o = {
        "M+": this.getMonth() + 1, //月份 
        "d+": this.getDate(), //日 
        "h+": this.getHours(), //小时 
        "m+": this.getMinutes(), //分 
        "s+": this.getSeconds(), //秒 
        "q+": Math.floor((this.getMonth() + 3) / 3),
        "S": this.getMilliseconds() //毫秒 
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}

jQuery(document).ready(function ($) {

    $('a').each(function (index, element) {
        if ($(this).attr('href') && $(this).attr('href').indexOf('p.qiao.baidu.com') >= 0 && !$(this).hasClass('sq-call')) {
            $(this).addClass('sq-call');
        }
    })

    // 商桥是否显示
    function is_qiao_shown() {
        return $("#nbwlMessageContainer").is(":visible");
    }

    //是否最小化
    function is_qiao_min() {
        return $("#nbwlToggle").hasClass('nb-webim-light-hide')
    }

    //打开商桥
    function open_qiao() {

        //判断离线,如果离线则退出
        if ($(".nb-nodeboard-base").hasClass("nb-show")) {
            $('#newBridge').css('display', 'block');
            return;
        }

        //打开聊天窗口
        $('#nb_invite_ok').click();

        //fixed 下一页闪动的问题
        $('#newBridge').addClass('active');

        if (is_qiao_min()) {
            $("#nbwlToggle.nb-webim-light-hide").click();
        }
    }

    //闪烁
    function flash_qiao() {

        var bar = $("#nbwlStatusBar");
        if (bar.length == 0) { return; }

        clearInterval(bar.css('background', 'rgb(70,70,70)').data('flash'));

        var i = 0;
        bar.data('flash', setInterval(function () {
            if ((i++) % 2 === 0) {
                bar.css('background', 'rgb(70,70,70)');
            } else {
                bar.css('background', 'rgb(49,49,49)');
            }

            if (i > 8) {
                clearInterval(bar.css('background', 'rgb(49,49,49)').data('flash'));
            }
        }, 150));
    }

    //居中显示
    function move_qiao_center(callback) {

        //取消left和top定位
        $("#nbWebImLightContainer").css({ top: 'initial', left: 'initial' });

        var win_h = $(window).height();
        var win_w = $(window).width();

        var h = $("#nbWebImLightContainer").height();
        var w = $("#nbWebImLightContainer").width();

        setTimeout(function () {
            $("#nbWebImLightContainer").animate({ right: (win_w - w) / 2, bottom: (win_h - h + 50) / 2 }, 'fast', function () {
                callback && callback();
            });
        }, 0);


        $("#nbwlToggle").off('click.custom').on('click.custom', function (e) {

            setTimeout(function () {

                if ($(this).hasClass('nb-webim-light-hide')) {
                    $("#nbWebImLightContainer").css({ top: 'initial', left: 'initial' }).animate({ right: 90, bottom: 0 }, 'fast', function () {
                        $("#nbWebImLightContainer").css({ top: 'initial', left: 'initial' });
                    });
                } else {
                    //$("#nbWebImLightContainer").css({ top: 'initial', left: 'initial' });
                    //$("#nbWebImLightContainer").animate({ right: (win_w - w) / 2, bottom: (win_h - h + 50) / 2 }, 'fast');
                }

            }.bind(this), 10);

        });

        $(window).off('resize.custom').on('resize.custom', function (e) {
            if (!$("#nbwlToggle").hasClass('nb-webim-light-hide')) {
                move_qiao_center();
            }
        });

        //商桥拖曳实现
        if (!$("#nbWebImLightContainer").data('draggable')) {

            $.getScript("/Scripts/jquery-ui.min.js", function () {
                $("#nbWebImLightContainer").data('draggable', $("#nbWebImLightContainer").draggable({
                    drag: function (event, ui) {

                        var win_h = $(window).height();
                        var win_w = $(window).width();

                        var h = $("#nbWebImLightContainer").height();
                        var w = $("#nbWebImLightContainer").width();

                        ui.position.top = Math.min(ui.position.top, (win_h - h));
                        ui.position.top = Math.max(ui.position.top, 0);
                        ui.position.left = Math.min(ui.position.left, (win_w-w));
                        ui.position.left = Math.max(ui.position.left, 0);

                        $(event.target).css('bottom', 'initial');
                    },
                    handle: $('#nbwlStatusBar')[0]
                }));
            });

         
        }
    }


    //发送消息
    $.send_qiao = function (kefu, message, isCenter) {

        var _inner_html = '<ins class="nb-webim-light-message nb-webim-light-message-1 custom-message">' +
            '<ins class="nb-webim-light-message-title">' +
            '<ins class="nb-webim-light-message-name">' + kefu + '</ins>' +
            '<ins class="nb-webim-light-message-time">今天 ' + (new Date().Format("hh:mm:ss")) + '</ins>' +
            '</ins>' +
            '<ins class="nb-webim-light-message-content">' +
            '<ins class="nb-webim-light-message-arrow"></ins>' +
            '<ins>' +
            '<div style="color:#000">' +
            '<p><font color="#000000" face="微软雅黑">' + message + '</font></p>' +
            '</div>' +
            '</ins>' +
            '</ins>' +
            '</ins>';


        if (!is_qiao_shown()) {

            //打开聊天窗口
            open_qiao();

            //if (call_once) { return false; }
            var check_shown_timer = setInterval(function () {

                if (is_qiao_shown()) {

                    clearInterval(check_shown_timer);

                    $(".nb-webim-light-status-bar-title").text('正在为您分配客服...');

                    $.send_qiao(kefu, message);
                }

                console.log('wait sq shown event!');

            }, 1000);

        } else {

            //是否居中
            if (isCenter) {
                move_qiao_center(function () {
                    $("#nbwlMessageContainer").append(_inner_html).scrollTop($('#nbwlMessageContainer')[0].scrollHeight);
                });
            } else {
                $("#nbwlMessageContainer").append(_inner_html).scrollTop($('#nbwlMessageContainer')[0].scrollHeight);
            }


            //随机时间出现
            setTimeout(function () {

                //最小化则打开
                if (is_qiao_min()) {
                    open_qiao();
                }

                //恢复状态
                $(".nb-webim-light-status-bar-title").text('正在咨询');

            }, parseInt(10 * Math.random()) * 1000);

            return true;
        }
    };

    // 自动回复  返回值为是否结束处理
    function first_reply(url, keyword) {

        var _final_reply = false;

        var city = '';

        try {
            city = $.ipData['data']['city'];
        } catch (err) { }

        var message = '您好，我是花都客服，有什么问题可以随时找我';

        if (keyword.indexOf('bd-PC-A01-01') >= 0) {
            message = '您好？您是想批发购买文件柜吗？';
            _final_reply = true;
        } else if (keyword.indexOf('bd-PC-M01-01') >= 0) {
            message = '您好，需要定制密集架吗？';
            _final_reply = true;
        } else if (url.indexOf('/wenjianguicaigou/') >= 0) {
            message = '您好！花都工厂为您定制优质钢柜！请问怎么称呼您？';
            _final_reply = true;
        } else if (url.indexOf('/mijijia/') >= 0 || url.indexOf('/mjjzt/') >= 0) {
            message = '您好！欢迎来到花都家具集团官网，花都集团27年专注档案装具生产研发，中国密集架领先制造商！全国销售网络。欢迎来访！';
            _final_reply = true;
        }

        console.log(url);

        $.send_qiao('花都客服', message);

        return _final_reply;
    }

    //商桥初始化成功后事件
    function qiao_ready(init_time) {

        //上次页面已经有会话 最小化
        if (init_time < 6000) {
            if (!$("#nbwlToggle").hasClass('nb-webim-light-hide')) {
                $("#nbwlToggle").click();
                return;
            }
        } else {
            first_reply(window.location.href, window.location.search);
        }
    }

    //加载地址
    function get_ip_address(callback) {
        /*$.getJSON('/index.php?m=content&c=part_html&a=get_ip_address', function (json) {
            $.ipData = json;
            callback && callback(json);
        });*/
    }

    (function main() {

        //19点以后不用此设置
        if (new Date().getHours() > 19 && new Date().getHours() < 8) {
            $('a').each(function (index, element) {
                if ($(this).attr('href') && $(this).attr('href').indexOf('p.qiao.baidu.com') >= 0 || $(this).hasClass('sq-call')) {
                    //打开腾讯
                    $(this).attr("href", "tencent://Message/?Uin={{ $sys->qq }}&websiteName=洛阳花都家具集团=&Menu=yes");
                }
            });
            return;
        } else {

            $('a').each(function (index, element) {
                if ($(this).attr('href') && $(this).attr('href').indexOf('p.qiao.baidu.com') >= 0 && !$(this).hasClass('sq-call')) {
                    $(this).addClass('sq-call');
                }
            });

        }

        //加载IP地址
        //get_ip_address();

        //加载开始时间
        var _init_time = 0;

        //商桥成功后执行qiao_ready事件
        var _temp_clock = setInterval(function () {

            _init_time += 1000;

            if (is_qiao_shown()) {

                //加载成功
                clearInterval(_temp_clock);
                qiao_ready(_init_time);
            } else {

                //到达15S时自动打开
                if (_init_time > 15000) {
                    clearInterval(_temp_clock);
                    open_qiao();
                    setTimeout(function () {
                        qiao_ready(_init_time);
                    }, 5000);
                }
            }
        }, 1000);

        //修改客服为打开聊天窗口
        $("body").on('click', '.sq-call', function (e) {

            e.preventDefault();
            clearInterval(_temp_clock);
            e.preventDefault();

            open_qiao();


            $.send_qiao('花都客服', '您好！感谢咨询，请问有什么可以帮助您的？');


            /*
            if ($(this).data('msg-id')) {

                $.getJSON('/Tool/GetSQMsg', { id: $(this).data('msg-id') }, function (json) {
                    if (json.isok) {
                        $.send_qiao('花都客服', json.msg.Message, true);
                    } else {
                        $.send_qiao('花都客服', "您好，请问怎么称呼您?",true);
                    }
                });


            } else {
   
                //如果有消息则回复
                var msg = $(this).data("msg");
                if (msg) {
                    $.send_qiao('花都客服', msg, true);
                } else {
                    $.send_qiao('花都客服', "您好，请问怎么称呼您?", true);
                }
            }*/

            flash_qiao();

        }).on('click', '.qq-call', function (e) {

            e.preventDefault();

            window.open("tencent://Message/?Uin={{ $sys->qq }}&websiteName=洛阳花都家具集团=&Menu=yes")

        });

    })();

});