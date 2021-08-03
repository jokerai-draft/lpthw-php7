<?php

// readline 带空格的输入 并转化为数组
// https://www.geeksforgeeks.org/how-to-read-user-or-console-input-in-php/

print_r("To get sum of two numbers, please input two numbers: ");
list($num1, $num2) = explode(" ", readline());

print_r("\n" . gettype($num1) . "\n");

$num1 = (double)$num1;
$num2 = (double)$num2;

print_r("\n" . gettype($num1) . "\n");

print_r("The sum of $num1 and $num2 is " . ($num1 + $num2) . "\n");

print_r("\n" . gettype($num1 + $num2) . "\n");

