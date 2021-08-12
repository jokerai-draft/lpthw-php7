<?php

$a = 1.2300;
print_r($a . "\n"); // 1.23
print_r(var_export($a === 1.23000000, true) . "\n"); // true
print_r(var_export(sprintf("%.4f", $a) === sprintf("%.8f", 1.23000000), true) . "\n"); // false
print_r(var_export(sprintf("%.4f", $a) === sprintf("%.4f", 1.23000000), true) . "\n"); // true

// 1
// 从不规则浮点数 获得 规则浮点数
$a = 1.2300;
$b = $a;
print_r($b . "\n"); // 1.23

$a = 0012.300;
$b = $a;
print_r($b . "\n"); // 12.3

// 说明
// 不规则浮点数 如果不经过显式保护 会立刻失效，变成规则浮点数

// 2
// 显式保护无效零位
$b = 1.2300;
$str_b = sprintf("%.4f", $b); // string
// print_r(gettype($str_b) . "\n");
print_r($str_b . "\n"); // 1.2300

// 3
// 从不规则浮点数 获得 规则浮点数
$str_b = "001.2300100000";
$b = (double)$str_b;
print_r($str_b . " => " . $b . "\n");

$str_b = "001.2300100000";
$b = doubleval($str_b); // $b = floatval($str_b);
print_r($str_b . " => " . $b . "\n");


