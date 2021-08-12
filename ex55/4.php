<?php

/* about serialize in 复合类型变量
- 类变量 static property 无法记录
- 实例变量 (public property, private property) 可以记录 (完整记录 class type value)

参考 php serialize static properties - Google 搜索
*/
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
    echo '// serialize($o1) === serialize($o2) ' . bool2str(serialize($o1) === serialize($o2)) . "\n";
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

$o = new Flag();
$p = new Flag();

echo "Two instances of the same class\n";
compareObjects($o, $p);

echo "\n\n";

class DFlag
{
    public $flag;
    public $i;
    private $j;

    public function __construct($flag = true, $i = 0) {
        $this->flag = $flag;
        $this->i = $i;
        $this->j = new DDFlag();
    }
}

class DDFlag
{
    private $dd;
    private static $instances = 0;
    private $instance;
    public function __construct(){
        // $this->dd = new DateTime();
        $this->dd = new DateTime('2000-01-01');
        $this->instance = ++self::$instances;
    }
    // 参考 https://www.php.net/manual/zh/language.oop5.cloning.php
}

$ox = new DFlag();
$px = new DFlag(true, 0);

echo "Two instances of the same class x \n";
compareObjects($ox, $px);
// 这说明 serial 可以覆盖到 private property 但是无法覆盖到 static property
// php serialize static properties - Google 搜索


echo "\n\n\n 浮点数比较和隐式转换 !  \n ";
// 没有 strictness about the equality
// https://github.com/eloquent/equality

$e1 = new Flag(true, 12);
$e2 = new Flag(true, 12.0);
$e3 = new Flag(true, 12.000);
$e4 = new Flag(true, '12.00');
$e5 = new Flag(true, '12.000');
// print_r(var_export(serialize(12.0) === serialize(12.00), true) . "\n"); // true *

echo "Two instances of the same class\n";
// compareObjects($e1, $e2); // false
compareObjects($e2, $e3); // true * 这个是 php 对 float 本身的处理之后(除非提前保护无效零位,在这里并无此意), float 都变成 规则浮点数了
// compareObjects($e3, $e4); // false
// compareObjects($e4, $e5); // false
