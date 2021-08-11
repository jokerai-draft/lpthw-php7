<?php
/*
php 自带的转换规则

PHP的隐式转换规则
php implicit conversion rules
适用于 ==

*
非布尔值和布尔值比较，二者 先自动转换为布尔值 再比较布尔值
这种隐式转换是由比较方里的 bool 值触发的

*
非数字字符串和整数比较，字符串尝试自动转换为int(0)
这种隐式转换是由比较方里的 int 值触发的
http://article.nxpop.com/php/21586.html


建议
不触发隐式转换的是谁？比较方里的字符串 ... 但是字符串也会自动 trim ?

https://www.php.net/manual/en/types.comparisons.php

*/

test4();
function test1(){
    // bool 值触发的隐式转换
    print_r(var_export(true == "12", true) . "\n"); // true
    print_r(var_export(true == 12, true) . "\n"); // true
}

function test21(){
    // int 值触发的隐式转换
    print_r(var_export(12 == '12', true) . "\n"); // true
    print_r(var_export(12 == '12.0', true) . "\n"); // true
    print_r(var_export(12 == 12.0, true) . "\n"); // true
    print_r(var_export(12 == '012', true) . "\n"); // true
    print_r(var_export(12 == '012.0', true) . "\n"); // true
    print_r(var_export(12 == '12 days', true) . "\n"); // true
    print_r(var_export(012 == '12 days', true) . "\n"); // false
}
function test22(){
    // double 值触发的隐式转换
    print_r(var_export(12.01 == '12.01', true) . "\n"); // true
    print_r(var_export(12.01 == '012.01', true) . "\n"); // true
    print_r(var_export(12.01+0.01 == '012.02', true) . "\n"); // true
    print_r(var_export(12.0 == '012.00', true) . "\n"); // true
    print_r(var_export(12.01 == '12.01 grams', true) . "\n"); // true
    print_r(var_export(12.01 == '0012.010 grams', true) . "\n"); // true
}


function test3(){
    // string 值触发的隐式转换
    print_r(var_export("1" == "01", true) . "\n"); // true
    print_r(var_export("1.101" == "01.101", true) . "\n"); // true
    print_r(var_export("1 day" == "01 day", true) . "\n"); // false
    print_r(var_export("1.10.1" == "01.10.1", true) . "\n"); // false
}

/* 不会触发隐式转换！ */
function test4(){
    print_r(var_export("1.101" === "01.101", true) . "\n"); // false
    print_r(var_export("1" === "01", true) . "\n"); // false
}


// 参考
// Unexpected Output from Loose Comparisons
// https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/
// 最后给的建议 并不是写 equals 函数
// 而是 Personally, I think you should use strict comparisons whenever possible.

/*
在PHP中类型转换变量，这样做的实际原因是什么？
https://qastack.cn/software/24378/type-casting-variables-in-php-what-is-the-practical-reason-for-doing-this
变量的类型由使用该变量的上下文确定

(什么拙劣理由)
在弱类型语言中，存在类型转换以消除类型化操作中的歧义，否则编译器/解释器将使用顺序或其他规则来假定要使用哪个操作

https://softwareengineering.stackexchange.com/questions/24378/type-casting-variables-in-php-what-is-the-practical-reason-for-doing-this
