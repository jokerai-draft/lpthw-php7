<?php

// implode
// get multiple line string, from array

$day = "Thursday";
$arr = ["Monday", "Tuesday", "Wednesday", $day, "Friday"];

$txt = implode(" ", $arr);
$count = count($arr);

print_r($txt);
print_r("\n");
print_r($count);
print_r("\n");

// do it 100 times (as in ruby block), then get the string as result

$arr = [];
$times = 100;
for ($i = 0; $i < $times; $i++) {
    $arr[] = "jo";
    // $arr[] = "jo{$i}";
}
print_r(implode(" ", $arr));
print_r("\n");

// do it combining 2 arrays, then get the string as result

$arr1 = ["Monday", "Tuesday"];
$arr2 = ["Wednesday", "Thursday", "Friday"];
$arr = array_merge($arr1, $arr2);
print_r(implode(" ", $arr));
print_r("\n");

print_r($arr1);
print_r($arr2);
print_r($arr);
print_r("\n");

// do it combining 2 arrays, then get the string as result
// https://stackoverflow.com/a/58719909 splat operator

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [...$arr1, ...$arr2];
$arr4 = [...$arr1, ...$arr3, 7, 8, 9];

print_r($arr4);
print_r("\n");
