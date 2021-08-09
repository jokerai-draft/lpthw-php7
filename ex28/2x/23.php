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
// serialize 其实和 == 比较是一样的, 是 没比较 type 的

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
    }
}

class OtherFlag
{
    public $flag;
    public $i;

    function OtherFlag($flag = true, $i = "0") {
        $this->flag = $flag;
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
