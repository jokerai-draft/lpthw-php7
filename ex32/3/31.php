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

// TIP 按值找键 (省内存版)
$flipped = array_flip($ary);
if (isset($flipped["bar"])) {  // "flipped" in_array
    echo "bar founded." . "\n";
    echo "value is bar, key is " . array_search('bar', $ary) . "\n";
}

// TIP 按值找键 (多键同值版)
$ary["Nacht"] = "ye";
if (in_array("ye", $ary, true)) {
    echo "ye founded." . "\n";
    $found = array_filter($ary, function($v){ return $v === "ye"; }); // work
    // $found = array_filter($ary, function($v){ return (bool)($v === "ye"); }); // work
    // $found = array_filter($ary, function($v){
    //     if ($v === "ye") { return true; }
    // }); // work
    foreach ($found as $key => $value) {
        echo "value is $value, key is $key \n";
    }
    unset($key); unset($value);
}


// 按键找值: 先判断 ary 中是否有此键，若有 返回值
if (array_key_exists("night", $ary)) {
    echo "key of 'night' exists" . "\n";
    echo "key is 'night', value is {$ary['night']}" . "\n";
}

// TIP 按键找值 (多键一起查版)
$allowed = ['light', 'night'];
$found = array_filter($ary, function($key) use ($allowed) { return in_array($key, $allowed, true); }, ARRAY_FILTER_USE_KEY);
if (count($found) === 0) {
    echo "No queried key found" . "\n";
} else {
    foreach ($found as $key => $value) {
        echo "value is $value, key is $key \n";
    }
    unset($key); unset($value);
}
