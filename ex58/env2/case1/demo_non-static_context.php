<?php

abstract class A
{
    protected static $test = "classA";

    public function static_test() {  // <------- 非静态环境
        echo static::$test; // Results classB
        echo self::$test;   // Results classA
    }
}

class B extends A
{
    protected static $test = "classB";
}

$obj = new B();
$obj->static_test();

// https://www.php.net/manual/en/language.oop5.static.php#104823
