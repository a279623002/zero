<?php

$curlobj = curl_init();  //创建一个curl 的资源，下面要用的  
curl_setopt($curlobj,CURLOPT_URL,"http://www.baidu.com");  //获取资源  
curl_setopt($curlobj,CURLOPT_RETURNTRANSFER,true); //请求结果不直接打印    
$output = curl_exec($curlobj); // 抓取URL并把它传递给浏览器</span><span class="pln"></span><span class="pln"></span>  
curl_close($curlobj);  // 关闭cURL资源，并且释放系统资源</span><span class="pln"></span>  
    
//将请求结果写入文件    
$myfile = fopen("curl_html.html", "w") or die("Unable to open file!");    
    
//$txt = $output;  直接存储到文件    
$txt = str_replace("百度","屌丝",$output); //处理结果集后存储到文件，把百度替换成屌丝  
    
fwrite($myfile, $txt);  //写入文件  
fclose($myfile);       //关闭文件  