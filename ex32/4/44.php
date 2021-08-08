<?php

// 一种老旧的数据结构

$myArr = [];
$myArr['foo'] = ["Monday", "Tuesday", "Wednesday", ];
$myArr['bar'] = ["Thursday", "Friday", ];
//////////// two dimensional array

// $output = array_merge($myArr1, $myArr2); // 合并结果
$output = array_reduce($myArr, 'array_merge', []);
print_r($output);



$myArr['bar']['extra'] = ["Saturday", "Sunday"];
//////////// three dimensional array # php array flatten

$myArr['bar']['extra']['cn']['simplified_Chinese'] = ["星期一", "星期二"];
$myArr['bar']['extra']['cn']['traditional_Chinese'] = ["禮拜三", "禮拜四"];
//////////// five dimensional array # php array flatten

// $output = array_merge($myArr1, $myArr2); // 合并结果
$output = [];
array_walk_recursive($myArr, function ($v, $k) use (&$output) { $output[] = $v; }); // work
print_r($output);

echo "\n\n untouched\n";
print_r($myArr);

// 打印合并结果
// foreach ($output as $d) {
//     echo $d . "\n";
// }
// unset($d);


// 参考
// php array flatten - Google 搜索
// https://www.php.net/manual/zh/function.array-reduce.php#114829
// https://stackoverflow.com/questions/1319903/how-to-flatten-a-multidimensional-array/1320156#1320156
