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

// print array: array to string

$days = ["Monday", "Tuesday", "Awesomeday"];
print_r("Now the days are: " . "[" . implode(", ", $days) . "]" . "\n");
