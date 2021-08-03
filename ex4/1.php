<?php

$a = 4;
$b = 4.0;
$c = "hello";

print_r("= 1 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = "h";
$b = 'h';
$c = (5 >= -2);

print_r("= 2 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = false;
$b = 1;
$c = true;

print_r("= 3 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = pi();
print_r("= 4 =". "\n");
print_r(gettype($a) . "\n");
print_r($a . "\n");

