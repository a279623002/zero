<?php
header("Content-type: text/html; charset=utf-8"); 
require './response.class.php';

$code = 200;
$message = '信息请求成功';
$data = array(
    'name' => 'zero',
    'sex' => 'man',
    'age' => '18',
    'exp' => array(
        '2017' => 'study',
        '2018' => 'work',
      )
    );
$response = new Response;
$result = $response->json($code,$message,$data);
echo '<pre>';
print_r($result);
echo '</pre>'; 
echo "<script>alert('".$result['message']."')</script>";

