<?php

// for loop 的应用：
// copy array to another array

// 引用拷贝的问题 参考 v2ex.com/t/774968?p=1#r_10497058 神奇的 Javascript，谁能告诉我为什么

// 值拷贝，等于深拷贝 完全脱钩

$arr1 = range(1,20);
$arr2 = $arr1;
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

$arr1[0] = 10;
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

//

// 引用拷贝，完全挂钩
$arr3 = &$arr1;
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr3) . "]" . "\n");

$arr1[0] = 10**2;
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr3) . "]" . "\n");

$arr3[0] = 10**3;
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr3) . "]" . "\n");

// 处理之后再拷贝

echo "\n\n";

// foreach

$arr1 = range(1,20);
$arr2 = [];
foreach ($arr1 as $v) {
    $arr2[] = "it's " . $v;
}
unset($v);
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

// foreach 变体
// array_walk

$arr1 = range(1,20);
$arr2 = [];
// array_walk($arr1, function($v, $k, &$output) { $output[] = "das " . $v; }, $arr2); // not work
array_walk($arr1, function($v, $k) use (&$arr2) { $arr2[] = "das " . $v; }); // work
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

// return accumulator 变体
// array_reduce

$arr1 = range(1,20);
$arr2 = [];
$arr2 = array_reduce($arr1, function($accumulator, $element){
    $accumulator[] = "die " . $element;
    return $accumulator; // 这个一定是 return accumulator
}, []);
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

// 函数式
// array_map

$arr1 = range(1,20);
// $arr2 = array_map(fn($v) => "its " . $v, $arr1); // work
$arr2 = array_map(function($v) { return "its " . $v . "!"; }, $arr1); // work
print_r("[" . implode(", ", $arr1) . "]" . "\n");
print_r("[" . implode(", ", $arr2) . "]" . "\n");

// 函数式
// array_filter 无此功能
