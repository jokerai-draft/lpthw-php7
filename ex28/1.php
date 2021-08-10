<?php

// 标量值的相等
// https://www.php.net/manual/en/language.types.intro.php scalar type

// bool

$a = true;
$b = true;

print_r(var_export($a === $b, true) . "\n");  #=> true


// int

$a = 3;
$b = 3;

print_r(var_export($a === $b, true) . "\n");  #=> true


// float (跳过)

$a = 3.1;
$b = 3.10;

print_r(var_export($a === $b, true) . "\n");  #=> true

$a = 1.1 * 100;
$b = 110;

print_r(var_export($a === $b, true) . "\n");  #=> false
print_r('$a = ' . $a . '; $b = ' . $b . ';' . "\n");

// float with bccomp

$a = 1.11 * 100;
$b = 111;

print_r(var_export(bccomp($a, $b, 99) === 0, true) . "\n");  #=> false
print_r('$a = ' . $a . '; $b = ' . $b . ';' . "\n");

// 参考
// bccomp 的第三个参数是敏感数位，默认值是 0 (只比较整数部分!) 这起不到比较浮点数的效果,建议设置为 2或99或更大
// 即 echo bccomp('1.00001', '1'); // 0
// https://www.php.net/manual/zh/function.bccomp.php bccomp 参数会字符串

// float with abs

// https://www.v2ex.com/t/164207?p=1#r_1736927
// 不能直接比较浮点，要比较的话都是 abs(a-b)<某个精确度

// string

$a = '1 man';
$b = "1 man";

print_r(var_export($a === $b, true) . "\n");  #=> true

// string with strcmp
// only useful when needed to determine which string is "greater"
// 参考
// https://stackoverflow.com/questions/3333353/string-comparison-using-vs-strcmp/3333369
// https://www.geeksforgeeks.org/string-comparison-using-vs-strcmp-in-php/

print_r(var_export(strcmp($a, '1 man') === 0, true) . "\n");  #=> true

echo "\n";

$para1 = <<<EOT
cool
EOT;
$para2 = "
cool
";
$para3 = "
cool
";

print_r(var_export($para1 === $para2, true) . "\n");  #=> false
print_r(var_export($para3 === $para2, true) . "\n");  #=> true



/*
说明

隐式转换发生在 if, switch, (loose comparision) ... 这些地方都应该用 全等号 ===
最好源数据的数据类型是确定的 固定的
https://www.v2ex.com/t/398773?p=1#r_4862569

不然就会出现 PHP 自动转换类型 debug
