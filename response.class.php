<?php
//接口文件

header("Content-type: text/html; charset=utf-8"); 
class Response{
    public function json($code,$message,$data){
        //接受数据，定义返回的数据
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' =>$data,
            'status' => '1'
        );
        //当文档为json时返回为json_encode？？
        return $result;
    }
}