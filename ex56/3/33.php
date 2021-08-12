<?php

// 转义为字符串
// (避免隐式转换)


// float -> string ，办法一 (砍掉无效零位) 传入 float 本身，获得砍掉无效零位的字符串
// float -> string ，办法二 (保留无效零位) 传入 float 本身 和 concise 小数点位数，获得保持指定位数的字符串

// 办法二对 float 显式保护无效零位

function test1(){
    $num = 0.00;
    $str = getStringFromDoubleF($num);
    print_r($str . "\n");
}

// without formatter
function getStringFromDouble($d){
    if (is_double($d)){
        // print_r(var_export(0 === 0.000, true) . "\n");   // false
        // print_r(var_export(0.0 === 0.000, true) . "\n"); // true
        // print_r(var_export(3.1 === 3.100, true) . "\n"); // true
        if ($d === 0.0) {
            return '0.0';
        } elseif ($d === 0.00) {
            return '0.00';
        } elseif ($d === 0.000) {
            return '0.000';
        } elseif ($d === 0.0000) {
            return '0.0000';
        } elseif ($d === 0.00000) {
            return '0.00000';
        } else {
            return (string)$d;
        }
        // print_r((string)3.1 . "\n"); // 3.1
        // print_r((string)3.100 . "\n"); // 3.1
        // print_r(sprintf("%.3f", 3.100) . "\n"); // 3.100
        // print_r(sprintf("%.6f", 3.100) . "\n"); // 3.100000
// print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.5f", 12.01000), true) . "\n"); // false
// print_r(var_export(sprintf("%.5f", 12.01000) === sprintf("%.5f", 12.01000), true) . "\n"); // true
// print_r(var_export(sprintf("%.2f", 12.01) === sprintf("%.2f", 12.01000), true) . "\n"); // true
    } else {
        return "invalid double value";
    }
}
// with formatter
function getStringFromDoubleF($d){
    if (is_double($d)){
        // double value formatter;
        $r = sprintf("%.2f", $d);
        return $r;
    } else {
        return "invalid double value";
    }
}
test1();
