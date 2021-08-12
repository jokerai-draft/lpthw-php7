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
    echo '// serialize($o1) == serialize($o2) ' . bool2str(serialize($o1) == serialize($o2)) . "\n";
}

class Flag
{
    public $flag;
    public $i;
    private $ii;

    function Flag($flag = true, $i = 0) {
        $this->flag = $flag;
        $this->i = $i;
        $this->ii = new DateTime();
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

echo "\n\n\n 浮点数比较和隐式转换 !  \n ";
// 没有 strictness about the equality
// https://github.com/eloquent/equality

$e1 = new Flag(true, 12.0); /// ！！！
$e2 = new Flag(true, 12.00);
// print_r(var_export(serialize(12.0) === serialize(12.00), true) . "\n"); // true
// print_r(var_export((double)12.0 === (double)12.00, true) . "\n"); // true
// print_r(var_export(12.0 === 12.00, true) . "\n"); // true

echo "Two instances of the same class\n";
compareObjects($e1, $e2); // 这里会出问题 ... 因为浮点数比较 总是可能出现问题 ... 解决办法：仍然保持变量的标量类型，转化为字符串再比较字符串
