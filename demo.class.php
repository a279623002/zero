<?php

class Person
{
    public $name;
    public $age;
    public $sex;
    
    private $qq;

    //在对象创建后自动调用的构造方法
    public function __construct($name = "", $age = "18", $sex = "male")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function say()
    {
        echo "<br />Name: " . $this->name . "<br />Age: " . $this->age . "<br />Sex: " . $this->sex;
    }

    //调用未定义的方法时自动调用
    public function __call($fName, $arguments)
    {
        echo "The function you called: ".$fName."(paramater: ";     //输出不存在方法的名称
        print_r($arguments);                                        //输出参数
        echo ") does not exist!<br />";
    }
    
    //当请求的是私有时自动调用
    public function __isset($name)
    {
        echo "The {$name} property is private, the __isset() is called automatically.<br />";
        echo isset($this->$name);
    }

    //用调用函数的方法调用对象的时候自动调用
    public function __invoke()
    {
        echo 'This is my object';
    }
}