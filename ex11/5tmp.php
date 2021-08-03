<?php

$a = 19.6;

// double 数据的不可比性
// https://www.php.net/manual/zh/language.types.float.php#54494
// 若比大小, bcmath
// 仅仅比较相同与否：若比相同, 先 cast 为字符串

// var_export(5 > -2);

function test1(){
    print_r("== 1 ==");
    var_export(19.6*100 === 1960); # false
    print_r("\n" . gettype(19.6*100) . "\n"); # double
    print_r("\n" . gettype(1900) . "\n"); # integer


    print_r("== 2 ==");
    var_export(19.6*100 === (double)1960); # false
    print_r("\n" . gettype(19.6*100) . "\n"); # double
    print_r("\n" . gettype((double)1900) . "\n"); # double

    print_r("== 3 ==");
    var_export((string)(19.6*100) === (string)1960); # true
    print_r("\n" . gettype((string)(19.6*100)) . "\n"); # string
    print_r("\n" . gettype((string)1900) . "\n"); # string
}

// test2();
// 参考
// php compare double values - Google 搜索
// https://stackoverflow.com/questions/3148937/compare-floats-in-php/3149007#3149007
function test21(){
    $a = 270.10 + 20.10;
    $b = 290.20;
    if ($a === $b){ echo 'same'; }
} // not work

function test22(){
    $a = 270.10 + 20.10;
    $b = 290.20;
    if (abs(($a-$b)/$b) < PHP_FLOAT_EPSILON){ echo 'same'; }
} // work

function test23(){
    $a = 270.10 + 20.10;
    $b = 290.20;
    if (abs($a-$b) < PHP_FLOAT_EPSILON){ echo 'same'; }
} // not work

function test31(){
    $a = 270.10 + 20.10;
    $b = 290.20;
    if (bccomp($a, $b, 2) === 0){ echo 'same'; }

    $a = 1960;
    $b = 19.6*100;
    if (bccomp($a, $b, 2) === 0){ echo 'same'; }
} // work
// https://stackoverflow.com/a/14052953 bcmath to compare double value
test31();
