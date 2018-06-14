<?php

include './demo.class.php';

//__construct
$person1 = new Person();
echo $person1->say();
$person2 = new Person('hello');//赋初始值
echo $person2->say();
$person3 = new Person('zero','17','male');
echo $person3->say();


//__call
$person4 = new Person();
$person4->none('emmmm');

//__isset
$person5 = new Person("zero",17);
echo isset($person5->qq);

//__invoke
$person6 = new Person();
$person6();
//TEST


//网络爬虫
$url = "https://www.sina.com.cn";
$s = file_get_contents($url);  
echo $s;