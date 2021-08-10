<?php

// 对象相等性的一种思路 (可以看作 interface Comparable 的实现思路)
// 比较 object 时:
//  SAME INSTANCE objects
// 比较对象的 全等 ===
//  not SAME INSTANCE objects
// 比较对象的 serialize *

// https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

// 参考
// https://www.php.net/manual/zh/language.oop5.object-comparison.php
// https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

// * 说明
// serialize 其实和 == 比较是一样的, 是 没比较 type 、只比较隐式转换之后的 value 的
// 这是 关于判断对象相等性   serialize 方案的致命缺点

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
    echo 'o1 serialized: ' . serialize($o1) . "\n";
    echo 'o2 serialized: ' . serialize($o2) . "\n";
}

class Flag
{
    public $flag;
    public $i;

    function Flag($flag = true, $i = 0) {
        $this->flag = $flag;
        $this->i = $i;
    }
}

class OtherFlag
{
    public $flag;
    public $i;

    function OtherFlag($flag = true, $i = "0") {
        $this->flag = $flag;
        $this->i = $i;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Two instances of the same class\n";
compareObjects($o, $p);

echo "\nTwo references to the same instance\n";
compareObjects($o, $q);

echo "\nInstances of two different classes\n";
compareObjects($o, $r);

echo "\n\n\n serialize 的隐式转换 !  \n ";
// 没有 strictness about the equality
// https://github.com/eloquent/equality

$e1 = new Flag(true, true); /// ！！！
$e2 = new Flag(true, 12);

echo "Two instances of the same class\n";
compareObjects($e1, $e2); // 这里会出问题 ... 因为 serialize 触发了类型的隐式转换 ... 解决办法：一 强制全等比较 二 反射 三 摸清隐式转化的规律

// 参考 php 隐式转换的循环
// https://stackoverflow.com/questions/2382490/how-does-true-false-work-in-php
