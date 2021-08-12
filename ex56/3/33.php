<?php

// 转义为字符串
// (避免隐式转换)

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
