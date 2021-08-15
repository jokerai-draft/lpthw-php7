<?php

class A
{
    protected static $test = "classA";

    public static function static_test() {  // <------- 静态环境
        echo static::$test;
        echo self::$test;
    }
}

class B extends A
{
    protected static $test = "classB";
}

B::static_test(); // classB classA
A::static_test(); // classA classA

// 参考
// https://www.php.net/manual/en/language.oop5.static.php#104823 非静态环境
// https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664 静态环境
