<?php

// 规则浮点数的比较

$a = 0.17;
$b = 1 - 0.83; //0.17

$bool1 = $a === $b;
print_r(var_export($bool1, true) . "\n"); // false

$bool2 = abs(($a - $b) / $b) < 0.0001;
print_r(var_export($bool2, true) . "\n"); // true

$bool3 = abs(($a - $b) / $b) < 0.00000000000000000000000000000000000000000000001;
print_r(var_export($bool3, true) . "\n"); // false

$bool4 = abs(($a - $b) / $b) < PHP_FLOAT_EPSILON;
print_r(var_export($bool4, true) . "\n"); // true

$bool5 = bccomp($a, $b, 99) === 0;
print_r(var_export($bool5, true) . "\n"); // true

