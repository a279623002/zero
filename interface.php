<?php

interface People{
    public function say();
    public function dance();
}
interface Animal{
    public function bite();
}

class Man implements People{
    public function say(){
        echo 'en';
    }
    public function dance(){
        echo '233';
    }
}
class Woman implements People{
    public function say(){
        echo 'em';
    }
    public function dance(){
        echo '555';
    }
}
class Bird implements Animal{
    public function bite(){
        echo 'mui';
    }
}
class Hybreed implements People,Animal{
    public function say(){
        echo 'hello';
    }
    public function dance(){
        echo 'world';
    }
    public function bite(){
        echo '!';
    }
}

$hybreed = new Hybreed;
echo $hybreed->say()."\r\n";
echo $hybreed->dance()."\r\n";
echo $hybreed->bite()."\r\n";

$bird = new Bird;
echo $bird->bite();