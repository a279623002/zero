<?php
header('Content-type: text/html; charset=utf-8');

class Show
{
    public function data($name, $code)
    {
        if ($name == "zero" && $code == "23"){
            $result = array(
                'name' => 'Hello '.$name,
                'code' => 'right '.$code,
                'status' => '1',
            );  
        }else{
            $result = array(
                'name' => 'Sorry, unknow your name',
                'code' => $code,
                'status' => '0',
            );
        }

        echo json_encode($result);
    }
}
$name = $_POST['name'];
$code = $_POST['code'];
$show = new Show;
$show->data($name, $code);