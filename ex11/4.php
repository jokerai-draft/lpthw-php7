<?php

// readline 之后的类型转化
// https://www.geeksforgeeks.org/how-to-read-user-or-console-input-in-php/

print_r("How old are you? ");
$age = (int)readline();

print_r("How tall are you? (m)");
$height = (double)readline();

print_r("How much do you weigh? (pounds)");
$weight = readline();

print_r("So, you're {$age} old, {$height} tall and {$weight} heavy. \n\n");

print_r($age . "\n");
print_r(gettype($age) . "\n");

print_r($height . "\n");
print_r(gettype($height) . "\n");

print_r($weight . "\n");
print_r(gettype($weight) . "\n");

