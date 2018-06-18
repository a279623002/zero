![top_img](https://github.com/a279623002/zero/blob/master/images/top_img.jpg)

# 文件说明
1 curl_html.html && spider.php
* PHP爬虫

2 index.php && demo.class.php
* 测试PHP的魔术方法
* 已测试__construct，__call，__isset，__invoke

3 font.html
* 移动端字体自适应的方法
* 同时利用Jquery Mobile框架测试

```
    <script>

        function autosize() {
            /*17-3-12:字体自适应start*/
            (function (doc, win) {
                var docEl = doc.documentElement,
                    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                    recalc = function () {
                        var clientWidth = docEl.clientWidth;
                        if (!clientWidth) return;
                        if (clientWidth >= 640) {
                            docEl.style.fontSize = '32px';/*移动端字体最好剩以16以rem做单位*/
                        } else {
                            docEl.style.fontSize = 32 * (clientWidth / 640) + 'px';
                            if (parseInt(docEl.style.fontSize) < 12) {
                                docEl.style.fontSize = '12px';/*最小12pxrem就不能转换了*/
                            }
                        }
                    };

                if (!doc.addEventListener) return;
                win.addEventListener(resizeEvt, recalc, false);
                doc.addEventListener('DOMContentLoaded', recalc, false);
                recalc();
            })(document, window);
        }
        window.onload = function () {

            autosize();
        }
    </script>
```

4 get-phone-area.html

* 电话归属地查询
* 调用淘宝提供的接口 https://tcc.taobao.com/cc/json/mobile_tel_segment.htm
* 同时利用Jquery Mobile框架测试
* 使用Jquery插件validate做验证功能

```
    $.ajax({
        type: 'get',
        url: 'https://tcc.taobao.com/cc/json/mobile_tel_segment.htm',
        data: param,
        dataType: 'jsonp',
        success: function (data) {
            $('#login').click();
            if (!!data['province'] && !!data['carrier'] && !!data['catName']) {
                var btn1 = "<botton id='1' class='ui-btn ui-shadow ui-corner-all'>"+data['province']+"</button>";
                var btn2 = "<botton id='2' class='ui-btn ui-shadow ui-corner-all'>"+data['carrier']+"</button>";
                var btn3 = "<botton id='3' class='ui-btn ui-shadow ui-corner-all'>"+data['catName']+"</button>";
                $('#back').before(btn1,btn2,btn3);


            }else {
                var err = "<botton id='4' class='ui-btn ui-shadow ui-corner-all'>"+'查询错误，请重试！'+"</button>"
                    $('#back').before(err);
            }

        },
        error: function (e) {
            hideLoader();
            $('#back').removeClass("ui-hidden-accessible");
        }
    })
```

5 git.txt

* 基础git指令
* 主要是上传操作

6 interface.php && test.class.php

* 接口测试
* 同时利用Jquery Mobile框架测试
* 使用Jquery插件validate做验证功能

7 linux.text

* 基础的linux指令

8 login.html

* 3d背景切换效果登录页

9 resopnse.class.php

* 自定义接口文件供returndata.php测试

10 returndata.php

* 调用response.class.php进行测试

12 get-weather.html

* 调用数据全面的天气预报接口



## No ending...


