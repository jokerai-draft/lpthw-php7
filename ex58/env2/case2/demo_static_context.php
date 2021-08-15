<?php

class A
{

}

class B extends A
{
    public static function foo() {      // <---- 静态环境
        echo 'new self: ';
        var_dump(new self());
        echo "\n";
        echo 'new parent: ';
        var_dump(new parent());
        echo "\n";
        echo 'new static: ';
        var_dump(new static());
        echo "\n";
    }
}

class C extends B
{

}

C::foo();
/*
new self: object(B)#1 (0)         self               // bar() 定义处所在的域
new parent: object(A)#1 (0)       self's parent
new static: object(C)#1 (0)       working labour

// 参考
// https://www.php.net/manual/en/language.oop5.static.php#104823 非静态环境
// https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664 静态环境


*/
