<?php

// 数字的替换

// php array find and replace

$list1 = [1,2,3,4,5]; // 等价于 $list1 = range(1,5);
$list1 = range(1, 10);
$list2 = range(1, 10);
$list = array_merge($list1, $list2);

print_r($list);

// 1
// preg_replace('/3/i', "100", $list);

// 2
array_walk($list, function(&$v, $k) { if ($v === 3) { $v = 100; } });

// 3
$size = count($list);
for ($i = 0; $i < $size; ++$i) {
    if ($list[$i] === 4) { $list[$i] = 400; }
}
unset($i); unset($size);

// 4
foreach ($list as &$ele) {
    if ($ele === 5) { $ele = -5; }
}
unset($ele);

print_r($list);

// 参考
// https://github.com/dseguy/clearPHP/blob/master/zh/rules/use-reference-to-alter-in-foreach.md


