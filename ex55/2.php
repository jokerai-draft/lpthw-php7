<?php

// about serialize

// 2

// serialze 不能处理什么？
// 全等号不能处理的， serialize 肯定不能处理，比如 精度问题

print_r(var_export(12.01 === 12.01000, true) . "\n"); // true
print_r(var_export(serialize(12.01) === serialize(12.01000), true) . "\n"); // true

print_r(var_export(bccomp(12.01, 12.01000, 99) === 0, true) . "\n"); // true


// 可能的办法
// 转化为字符串，然后全等号比较字符串

print_r(var_export(serialize("12.01") === serialize("12.01000"), true) . "\n"); // false

print_r(var_export("12.01" === "12.01000", true) . "\n"); // false

print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.5f", 12.01000), true) . "\n"); // false
print_r(var_export(sprintf("%.5f", 12.01000) === sprintf("%.5f", 12.01000), true) . "\n"); // true
print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.2f", 12.01000), true) . "\n"); // true
