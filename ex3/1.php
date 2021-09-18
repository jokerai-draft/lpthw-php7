<?php

$isGreaterOrEqual = var_export(5 >= -2, true);
if ($isGreaterOrEqual) print_r("5 >= -2, Got it. \n");

# 改进后的写法: 对判断语句作改进

$isGreaterOrEqual = var_export(5 >= -2, true);
if ($isGreaterOrEqual === 'true') print_r("5 >= -2, Got it. \n");

# 改进理由
/* what is $isGreaterOrEqual */
$isGreaterOrEqual = var_export(5 >= -2, true);
print_r(gettype($isGreaterOrEqual)); #=> string
print_r($isGreaterOrEqual); #=> 'true' 字符串

# 另一种思路
$isGreaterOrEqual = (bool)(-3 >= -2);
print_r(gettype($isGreaterOrEqual)); #=> boolean
print_r($isGreaterOrEqual); #=> 0 所以打印不出来。但可以参与判断语句了
print_r(var_export($isGreaterOrEqual, true)); #=> 'false' 字符串
if ($isGreaterOrEqual === false) print_r("-3 >= -2, is false, Got it. \n"); # OK
