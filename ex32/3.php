<?php

// 一种全新的数据结构

// 按值找键
// 按键找值

$ary = [
    "foo" => "bar",
    100   => -100,
    -100  => 100,
];

$ary[] = "hello";
$ary["light"] = "guang";
$ary["night"] = "ye";
$ary[] = "world";

var_dump($ary);

// 按值找键: 先判断 ary 中是否有此值，若有 返回键
if (in_array("bar", $ary, true)) {
    echo "bar founded." . "\n";
    echo "value is bar, key is " . array_search('bar', $ary) . "\n";
}


// 按键找值: 先判断 ary 中是否有此键，若有 返回值
if (array_key_exists("night", $ary)) {
    echo "key of 'night' exists" . "\n";
    echo "key is 'night', value is {$ary['night']}" . "\n";
}

