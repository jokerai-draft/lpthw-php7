<?php

// 一种老旧的数据结构

$arr = ["Monday", "Tuesday", "Wednesday", ];

$days ??= $arr; // 防止野指针
$days[] = "Thursday";

foreach ($days as $d) {
    print_r($d . "\n");
}
unset($d);

// 改变各项

foreach ($days as &$d) {
    $d = 'Sunny ' . $d;
}
unset($d);
print_r($days);

// 参考
// https://github.com/dseguy/clearPHP/blob/master/zh/rules/use-reference-to-alter-in-foreach.md
// 参照
// https://stackoverflow.com/questions/47128069/why-do-i-need-unset-value-after-foreach-loop/53887984#53887984


// 改变各项

$months = ["January", "February", "March"];

array_walk($months, function (&$v, $k) { $v .= " Revolution"; }); // return true
// print_r($months);
array_walk($months, fn(&$v, $k) => $v = "Big " . $v);
// print_r($months);
foreach ($months as &$m) {
    $m .= "!";
}
// $m='?'; # 如果不 unset 那么滥用这个会导致并不期待的事发生
unset($m);
print_r($months);

// 参考
// https://stackoverflow.com/questions/3432257/difference-between-array-map-array-walk-and-array-filter
// array_walk 本身并不是函数式编程 而是 foreach ($items as &$item) 的变体



// 处理各项
// (关注的是获得处理结果，而非原值是否改变)
// "处理" 最舒服的办法自然是函数式（比如 array_map, array_filter ）， cost 是因匿名函数所以比较慢 ，如果是 字符串函数名 就会比较快
// php array_walk(foreach的变体) vs array_map(函数式) vs foreach

echo "\n\n";

$Ddays = array_map(fn($item) => 'Cloudy ' . $item, $days);

print_r($days); // 不改变原值
print_r($Ddays);

$uppercaseDdays = array_map('strtoupper', $Ddays);
print_r('$uppercaseDdays: ' . "\n");
print_r($uppercaseDdays);

$uppercasedaysWhileRaining = array_map(fn($item) => strtoupper('While Raining ' . $item), $days);
print_r('$uppercasedaysWhileRaining: ' . "\n");
print_r($uppercasedaysWhileRaining);

// 参考
// https://stackoverflow.com/questions/47128069/why-do-i-need-unset-value-after-foreach-loop
// closure 的性能问题
// https://stackoverflow.com/questions/18144782/performance-of-foreach-array-map-with-lambda-and-array-map-with-static-function
