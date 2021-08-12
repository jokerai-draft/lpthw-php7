<?php

// about serialize in 标量类型变量

// 1

$a = new stdClass();
$cc = serialize($a); // a string
print_r(gettype($cc) . "\n"); // string

// 2

$a = new stdClass();
$a->something = 123;
$a->sthg = true;
$b = new stdClass(); // different instance, same class
$b->something = '123';  // same values and type
$b->sthg = 1;
print_r( var_export($a == $b, true) . "\n"); // true
print_r( var_export(serialize($a) === serialize($b), true) . "\n"); // false

$a->something = '123'; $b->sthg = true;
print_r( var_export(serialize($a) === serialize($b), true) . "\n"); // true
