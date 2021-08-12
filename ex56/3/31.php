<?php

// 转义为字符串
// (避免隐式转换)

function test11(){
    $b1 = true;
    $b2 = false;

    print_r(getStringFromBool($b1));
    print_r(getStringFromBool($b2));
}
function test12(){
    $b1 = true;
    $b2 = false;

    print_r(var_export($b1, true) . "\n"); // preferred
    print_r(var_export($b2, true) . "\n");
}
function getStringFromBool($b){
    if (is_bool($b)){
        return $b ? "true" : "false";
    } else {
        return "invalid boolean value";
    }
}
test12();

