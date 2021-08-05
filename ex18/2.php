<?php

// 原值视角
// 是否还能获取到最初原值

// 变量是返回新值 还是更改原值(等于 传入参数时候 pass by reference)了 (之前传入参数是 pass by value 传入的是一个 deep copy 拷贝)
// https://www.php.net/manual/en/language.variables.basics.php
// https://www.v2ex.com/t/774968#r_10497058

$str = 'This is a string, ';
print_r($str);
concatenateDots($str);
print_r($str);

print_r("\n\n");

$str2 = concatenateDots($str);
print_r($str);
print_r($str2);

function concatenateDots($str){
    $newStr = $str . "。。。";
    return $newStr;
}


print_r("\n\n");
$test1 = "I like cloud    ";
print_r("$test1" . ".");
$test2 = trim($test1); # safe method 不改变参数 (1 函数体定义时候 设定参数不加 & 2 如果想获得处理结果 用新变量去承接 原变量的值不受更改-是只读的)
print_r("$test1" . ".");
print_r("$test2" . ".");

print_r("\n\n");
$test1 = "I like cloud    ";
substr($str, 1); # safe method 不改变参数
print_r("$test1" . ".");
$test2 = substr($test1, 1);
print_r("$test2" . ".");

# Enumerable#sort返回对象的已排序版本，而Enumerable#sort!将其排序到位
// https://www.codenong.com/7179016/  ruby function 感叹号
// https://stackoverflow.com/questions/612189/why-are-exclamation-marks-used-in-ruby-methods  The ones without are called "safe methods", and they return a copy of the original with changes applied to the copy, with the callee unchanged.

