<?php

// 一种老旧的数据结构

$myArr1 = ["Monday", "Tuesday", "Wednesday", ];
$myArr2 = ["Thursday", "Friday"];

$output = array_merge($myArr1, $myArr2); // 合并结果
print_r($output);

// 打印合并结果
foreach ($output as $d) {
    echo $d . "\n";
}
unset($d);

echo "\n\n";

// 打印合并结果
$size = count($output);
for ($i = 0; $i < $size; ++$i) {
    echo $output[$i] . "\n";
}
unset($i); unset($size);


// 打印合并结果
array_walk($output, function($v, $k) { echo $v; });
echo "\n";
// 打印合并结果
array_map(function($item) { echo $item; }, $output);
// array_map(fn($item) => { echo $item; }, $output); # 无法做到简写(解释器报错), 只能用标准 closure 闭包作为 callback

// 参考
// 键头函数
// https://stitcher.io/blog/short-closures-in-php
// 如何写 arrow function
// https://stackoverflow.com/questions/4260086/php-how-to-use-array-filter-to-filter-array-keys


