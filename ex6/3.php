<?php

// 字符串的比较
// aka 字符串的 equals 函数

function test1(){
    // 不好的办法

    // should be false
    print_r(var_export(" 42" == "42", true) . "\n"); # true

    // Remarks:
    // 在 == 等号判定下，判断结果受到隐式转换影响
}
function test2(){
    // 较好的办法

    // should be false
    print_r(var_export(" 42" === "42", true) . "\n"); # false

    // Remarks:
    // 在这种方案里，全等号 === 会判断变量类型和变量内容
    // 这种方案因为 1 (允许) 未指定类型的变量作为参数 2 (允许) 接受类型转换函数作为参数 所以给了发生隐式转换发生的机会 --- 故而不够 dedicated 比如
    // print_r(var_export((string)0.0 === (string)000, true) . "\n");  // true
    // print_r(var_export((double)0 === (double)0.00, true) . "\n");  // true
}
function test3(){
    // 最好的办法

    // should be false
    print_r(var_export(strcmp(" 42", "42") === 0, true) . "\n"); # false

    // Remarks:
    // 在这种方案里，先显式写明 让比较方返回字符串，然后 在确认参加比较的两方都是字符串之后 比较字符串。这种方案彻底避开了类型的隐式转换，让所有隐式转换过程 显露出来
}
test32();
function test32(){
    // 最好的办法

    // should be false
    $a = 0;
    $b = 0.0;
    print_r(gettype($a) . "\n"); // integer
    print_r(gettype($b) . "\n"); // double
    $a = $a === 0 ? "0" : "-1";
    $b = $b === 0.0 ? "0.0" : "-1.0";
    print_r(gettype($a) . "\n"); // string
    print_r(gettype($b) . "\n"); // string
    print_r(var_export(strcmp($a, $b) === 0, true) . "\n"); # false
}

// 参考 42 问题
// https://stackoverflow.com/questions/65040819/why-does-php-8-treat-42-42-as-true

// 0 和 0.0 问题
// https://stackoverflow.com/questions/38992017/php-how-to-distinguish-0-from-0-0


