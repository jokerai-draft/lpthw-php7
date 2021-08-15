<?php

class A
{

}

class B extends A
{
    public function bar() {  // <------- 非静态环境
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

$c = new C();
$c->bar();

/*
new self: object(B)#2 (0)         self               // bar() 定义处所在的域
new parent: object(A)#2 (0)       self's parent
new static: object(C)#2 (0)       working labour
*/

echo "\n\n";

$b = new B();
$b->bar();

/*
new self: object(B)#2 (0)         self
new parent: object(A)#2 (0)       self's parent
new static: object(B)#2 (0)       working labour
*/
