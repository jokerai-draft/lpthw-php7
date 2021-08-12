<?php

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

    function Flag($flag = true, $i = 0) {
        $this->flag = $flag;
        $this->i = $i;
    }
}
class DFlag
{
    public $flag;
    public $i;
    private $j;

    function Flag($flag = true, $i = 0) {
        $this->flag = $flag;
        $this->i = $i;
        $this->j = new DateTime();
    }
}

$o = new Flag();
$p = new Flag();

echo "Two instances of the same class\n";
compareObjects($o, $p);

echo "\n\n";

$ox = new DFlag();
$px = new DFlag();

echo "Two instances of the same class x\n";
compareObjects($ox, $px);


echo "\n\n\n serialize 的隐式转换 !  \n ";
// 没有 strictness about the equality
// https://github.com/eloquent/equality

$e1 = new Flag(true, 12.0); /// ！！！
$e2 = new Flag(true, 12.00);
// print_r(var_export(serialize(12.0) === serialize(12.00), true) . "\n"); // true

echo "Two instances of the same class\n";
compareObjects($e1, $e2); // 这里会出问题 ... 因为 serialize 触发了类型的隐式转换 ... 解决办法：一 强制全等比较 二 反射 三 摸清隐式转化的规律

// 参考 php 隐式转换的循环
// https://stackoverflow.com/questions/2382490/how-does-true-false-work-in-php
