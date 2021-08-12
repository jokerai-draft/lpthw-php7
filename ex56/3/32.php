<?php

// 转义为字符串
// (避免隐式转换)

function test1(){
    $num = 32;
    $str = getStringFromInt($num);
    print_r($str . "\n");
}
function getStringFromInt($i){
    if (is_int($i)){
        return (string)$i;
    } else {
        return "invalid int value";
    }
}
test1();
