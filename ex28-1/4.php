<?php
/*
最终可能需要两个功能

1 clone 当前对象 作为 复制品，使得 复制品 和 原对象，有基于内容的相等性

2 比较两个对象是否相等 (对 object 递归判断所有属性 若有一个值不相等 就不相等)

参考
https://www.php.net/manual/zh/language.oop5.cloning.php
https://www.php.net/manual/en/language.oop5.object-comparison.php

*/

class SubObject
{
    static int $instances = 0;
    public  $instance; // (int 在此作用是诱发隐式转换，而并未起到 "报错" 作用) 如果去掉 int 则会有更大问题暴露 说明了 equals 函数的必要性

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;
    public int $age = -1;

    function __clone()
    {
        // 强制复制一份this->object， 否则仍然指向同一个对象
        $this->object1 = clone $this->object1;
    }
}

test3();
function test1(){
    $obj = new MyCloneable();
    $obj->object1 = new SubObject();
    $obj->object2 = new SubObject();
    echo "\n" . '$obj' . "\n"; print_r($obj);

    $obj2 = clone $obj;
    echo "\n" . '$obj2' . "\n"; print_r($obj2);

    $obj3 = clone $obj;
    echo "\n" . '$obj3' . "\n"; print_r($obj3);

    echo "\n" . '$obj' . "\n"; print_r($obj);
}
function test2(){
    $obj = new MyCloneable();
    $obj->object1 = new SubObject();
    $obj->object2 = new SubObject();

    $obj2 = clone $obj;
    // echo "\n" . '$obj' . "\n"; print_r($obj);
    // echo "\n" . '$obj2' . "\n"; print_r($obj2);

    $obj2->object1->instance = 1;
    // echo "\n" . '$obj' . "\n"; print_r($obj);
    // echo "\n" . '$obj2' . "\n"; print_r($obj2);

    print_r(var_export($obj == $obj2, true) . "\n"); // true

}
function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSE';
    } else {
        return 'TRUE';
    }
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

function test3(){
    $obj = new MyCloneable();
    $obj->object1 = new SubObject();
    $obj->object2 = new SubObject();

    $obj2 = clone $obj;
    // echo "\n" . '$obj' . "\n"; print_r($obj);
    // echo "\n" . '$obj2' . "\n"; print_r($obj2);

    $obj2->object1->instance = 1;
    // echo "\n" . '$obj' . "\n"; print_r($obj);
    // echo "\n" . '$obj2' . "\n"; print_r($obj2);

    print_r(var_export($obj == $obj2, true) . "\n"); // true
    compareObjects($obj, $obj2);

    print_r(gettype($obj2->object1->instance) . "\n"); // integer

    $obj2->object1->instance = true; // hack!!!! 诱发隐式转换

    print_r(gettype($obj2->object1->instance) . "\n"); // integer

    print_r(var_export($obj == $obj2, true) . "...\n"); // true [ 问题暴露 ]
    print_r(gettype($obj->object1->instance) . "\n"); // integer
    print_r(gettype($obj2->object1->instance) . "\n"); // integer
    compareObjects($obj, $obj2);

    // 问题
    // 在该判断变量类型不同的时候，没有判断出来

    // 问题解决思路
    // php when to differenciate true and 1

    // 问题解决办法
    // 1 equals 函数
    // 2 下探到各项值 作 strict compare 即 专门计算**递归各项值**

    // 可能用到的方法：因为要知道 各项值的 class, type, value 所以会用到反射

}

// php stop conversion of bool to int - Google 搜索
// https://stackoverflow.com/questions/44954896/how-to-prevent-boolean-type-juggling-to-int-in-php

// what can go wrong?
// https://medium.com/swlh/use-integers-by-default-in-code-to-preempt-headaches-bfa4bf806e5a

// 如果不解决，那么 基于隐式转换的存在，它让你对于 一个变量的值 是无法期待的 (但是可以去找原值)
// https://segmentfault.com/a/1190000002784965 php 隐式转换 - Google 搜索  PHP 中的 == 和“隐式转换” 探测网站密码加密方式

