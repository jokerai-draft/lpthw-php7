<?php

// for loop

$days = ["Monday", "Tuesday"];
$days = [];
$days[] = "Monday";
$days[] = "Tuesday";

$size = count($days);
for ($i = 0; $i < $size; ++$i) {
    // print_r($days[$i]);
    print_r("$i. {$days[$i]} \n");
}
unset($i); unset($size);

// foreach

$days ??= []; // 防止野指针
$days[] = "Wednesday";

foreach ($days as $d) {
    print_r($d . "\n");
}
unset($d);

// foreach

$days = ["1" => "Monday", "2" => "Tuesday", "3" => "Wednesday"];
$days[] = "Thursday";

foreach ($days as $k => $v) {
    print_r("$k means $v \n");
}
unset($k); unset($v);
print_r($days);


// about unset , why unset makes a perfect for loop and foreach loop
// https://stackoverflow.com/questions/47128069/why-do-i-need-unset-value-after-foreach-loop



// array_walk
// array_walk 本身并不是函数式编程 而是 foreach ($items as &$item) 的变体
// 返回值 true

$days = ["Monday", "Tuesday", "Wednesday"];

array_walk($days, function($v, $k) { echo $v . ", "; });

echo "\n";

array_walk($days, function($v, $k) {
    echo $v . ", ";
});

echo "\n";

array_walk($days, function($v, $k) {
    $v .= "!";
    echo $v . ", ";
});

print_r($days);

echo "\n// 传引用 \n";
array_walk($days, function(&$v, $k) {
    $v .= "!";
});

print_r($days);

echo "\n";

echo "\n// callback 的第三个参数 \n";

$days = ["Monday", "Tuesday", "Wednesday", "Thursday"];

$trailing_mark = "....";

array_walk($days, function(&$v, $k, $prefix) {
    $v = $prefix . $v . "!";
}, $trailing_mark);

print_r($days);

