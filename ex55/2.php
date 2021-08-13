<?php

// about serialize in 标量类型变量

// 2

// 在标量类型变量
// serialze 不能处理什么？
// 全等号不能处理的， serialize 肯定不能处理，比如 精度问题

print_r(var_export(12.01 === 12.01000, true) . "\n"); // true
print_r(var_export(serialize(12.01) === serialize(12.01000), true) . "\n"); // true

print_r(var_export(bccomp(12.01, 12.01000, 99) === 0, true) . "\n"); // true

echo "\n\n";

// 可能的办法
// 转化为字符串，然后全等号比较字符串

print_r(var_export(serialize("12.01") === serialize("12.01000"), true) . "\n"); // false

print_r(var_export("12.01" === "12.01000", true) . "\n"); // false
print_r(var_export( 12.01  ===  12.01000 , true) . "\n"); // true

print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.5f", 12.01000), true) . "\n"); // false
print_r(var_export(sprintf("%.5f", 12.01000) === sprintf("%.5f", 12.01000), true) . "\n"); // true
print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.2f", 12.01000), true) . "\n"); // true

// 这里的关注点是 %.5f 和 %.2f 得到的不同的字符串，是 sprintf formatter (它本身是 serialize 的上游了 和 serialize 无关)
