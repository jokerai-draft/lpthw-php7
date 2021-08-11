<?php
/*
php 里的 strcmp 的性质和用法 (比全等号稍微弱一点点)(比 == 强很多)

对 string 值，比较 value
如果传入的参数不是 string 类型则会有一次被隐式转化到 string 类型的过程

// 也是 帮助 跳出隐式转换规则 的
// strcmp($str1, $str2) === 0;

无法解决的问题
print_r(var_export(strcmp(0, 0.0) === 0, true) . "\n"); // true
 若把它看作 int float 发生隐式转换，则 宜交给 === 解决，类似
 $z = $z === 0.0 ? "0.0" : "-1";
 $a = $a === 0 ? "0" : "-2";
 print_r(var_export(strcmp($a, $z) === 0, true) . "\n");



*/

// 1

function test1(){
    // bool 值触发的隐式转换
    print_r(var_export(true == "12", true) . "\n"); // true
    print_r(var_export(true == 12, true) . "\n"); // true
}
function test1_(){
    // 跳出 bool 值触发的隐式转换
    print_r(var_export(strcmp(true, "12") === 0, true) . "\n"); // false
    print_r(var_export(strcmp(true, 12) === 0, true) . "\n"); // false
    print_r(var_export(strcmp(true, 1) === 0, true) . "\n"); // true
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
function test21_(){
    // 跳出 int 值触发的隐式转换
    print_r(var_export(strcmp(12, '12') === 0, true) . "\n"); // true
    print_r(var_export(strcmp(12, '12.0') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(0, '0.0') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(0, 0.0) === 0, true) . "\n"); // true     ? [1]
    print_r(var_export(strcmp(12, 12.0) === 0, true) . "\n"); // true   ?
    echo "\n";
    print_r(var_export(strcmp(12, '0012') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(0012, '0012') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(0012, '12') === 0, true) . "\n"); // false
    echo "\n";
    print_r(var_export(strcmp(12.0, '12.0') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12, '012') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12, '012.0') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12, '12 days') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(012, '12 days') === 0, true) . "\n"); // false

    // [1] https://www.php.net/manual/en/function.strval.php#57559
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
function test22_(){
    // double 值触发的隐式转换
    print_r(var_export(strcmp(12.01, '12.01') === 0, true) . "\n"); // true
    print_r(var_export(strcmp(12.01, '012.01') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12.01+0.01, '012.02') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12.01+0.01, '12.02') === 0, true) . "\n"); // true
    print_r(var_export(strcmp(12.0, '012.00') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12.01, '12.01 grams') === 0, true) . "\n"); // false
    print_r(var_export(strcmp(12.01, '0012.010 grams')===0, true) . "\n"); // false
}
function test3(){
    // string 值触发的隐式转换
    print_r(var_export("1" == "01", true) . "\n"); // true
    print_r(var_export("03" == "3", true) . "\n"); // true
    print_r(var_export("1.101" == "01.101", true) . "\n"); // true
    print_r(var_export("1 day" == "01 day", true) . "\n"); // false
    print_r(var_export("1.10.1" == "01.10.1", true) . "\n"); // false
}
function test3_(){
    // string 值触发的隐式转换
    print_r(var_export(strcmp("0", "0.0") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("1", "01") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("03", "3") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("0.00", "0") === 0, true) . "\n"); // false   [1]
    print_r(var_export(strcmp("42", " 42") === 0, true) . "\n"); // false   [2]
    print_r(var_export(strcmp("42", "42 ") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("1.101", "01.101") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("1 day", "01 day") === 0, true) . "\n"); // false
    print_r(var_export(strcmp("1.10.1", "01.10.1") === 0, true) . "\n"); // false
    // [1] 解决了 0 与 0.00 的比较的问题
    // https://www.php.net/manual/en/function.strval.php#57559

    // [2]
    // https://stackoverflow.com/questions/65040819/why-does-php-8-treat-42-42-as-true

}


