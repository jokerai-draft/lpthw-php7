<?php

// 标量类型转换：浮点数->字符串

// 情况一 直接转换

$a = 1.23;
$str = (string)$a;

print_r(gettype($str) . "\n");
print_r($str . "\n");

// 情况二 格式转换
// (转换为满足某种格式的字符串) sprintf formatter as float formatter

$a = 1.23;
$str = sprintf("%.4f", $a); // 显式保护无效零位

print_r(gettype($str) . "\n");
print_r($str . "\n");

// 情况三 其他转换

// 比如 要求前置几位零值

$a = 1.23;
$str = sprintf("%013.4f", $a); // 小数点前 八位, 小数点后 四位

print_r(gettype($str) . "\n");
print_r($str . "\n");

// 参考 php int to string prefix zero - Google 搜索


// 评论区
// float 是一个标量类型, 常用 sprintf formatter 得到某种格式 并得到某种格式的字符串, 可以视为保护无效零位的一种方式
