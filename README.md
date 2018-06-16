![top_img](https://github.com/a279623002/zero/blob/master/images/top_img.jpg)


* curl_html.html
** PHP爬虫保存的文件

* demo.class.php
** 测试PHP的魔术方法
*** 已测试__construct，__call，__isset，__invoke

* font.html
** 移动端字体自适应的方法
*** 同时利用Jquery Mobile框架测试

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

