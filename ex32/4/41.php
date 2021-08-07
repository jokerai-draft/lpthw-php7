<?php

// 一种老旧的数据结构

$arr = ["Monday", "Tuesday", "Wednesday", ];

// 查找条目 (返回第一个匹配项)
if (in_array("Wednesday", $arr, true)) {
    echo "bingo \n";
    echo "Wednesday at #" . array_search("Wednesday", $arr);
}

// 参考
// https://code.tutsplus.com/tutorials/working-with-php-arrays-in-the-right-way--cms-28606
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class

echo "\n\n";

// 查找条目 (返回全部匹配项)
$arr = ["Monday", "Tuesday", "Wednesday", "Wednesday", "Wednesday"];

if (in_array("Wednesday", $arr, true)) {
    echo "bingo \n";
    $found = array_filter($arr, function($v){ return $v === "Wednesday"; });
    foreach ($found as $key => $value) {
        echo "$value at #$key \n";
    }
    unset($key); unset($value);
}

// 参考
// https://stackoverflow.com/questions/8729410/php-get-key-name-of-array-value

echo "\n\n";

// 查找条目 (将两次查找结果合并，返回全部匹配项)
$arr = ["Monday", "Tuesday", "Wednesday", "Wednesday", "Wednesday", "Monday"];

$query = ["Monday", "Wednesday"];
$found = array_filter($arr, function($v) use ($query) { return in_array($v, $query, true); });
if (count($found) === 0) {
    echo "No queried key found" . "\n";
} else {
    foreach ($found as $key => $value) {
        echo "value is $value, key is $key \n";
    }
    unset($key); unset($value);
}
