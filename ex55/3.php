<?php

// serialize in 复合类型变量

$left = new stdClass;
$left->foo = 'bar';

$right = new stdClass;
$right->foo = 'bar';

$comparator = new Comparator;

if ($comparator->equals($left, $right)) {
    echo 'equal';
} else {
    echo 'not equal';
}

class Comparator
{
    // 这种办法 不奏效
    // function equals($left, $right){
    //     return $left === $right;
    // }

    // 这种办法 奏效
    function equals($left, $right){
        return serialize($left) === serialize($right);
    }

    // 还有其他办法
    // function equals($left, $right){
    //     ...
    // }
}

// 情况描述选自
// https://github.com/eloquent/equality
// Equality uses "reflection" to recurse over the values it is passed and ensure that they are deeply, and strictly, equal.
// what is "reflection" ... https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
