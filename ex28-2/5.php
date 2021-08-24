
经典问题

PHP How to distinguish 0 from 0.0
https://stackoverflow.com/questions/38992017/php-how-to-distinguish-0-from-0-0

答案一（跳过）
strcmp

$a = 0;
$b = 0.0;
print_r(var_export(strcmp((string)$a, (string)$b) === 0, true) . "\n"); // true

// 说明: 即使启用 <?php declare(strict_types=1); 也是依然结果

答案二
strcmp

print_r(var_export(strcmp(0, 0.0) === 0, true) . "\n"); // true

print_r(var_export(strcmp("0", "0.0") === 0, true) . "\n"); // false

问题是 0.0 => "0.0" 如何得到，无解

答案三
全等号

$a = 0;
$b = 0.0;
print_r(var_export($a===$b, true) . "\n"); // false OK

答案四
提前准备好了 "0" "0.0"  // ------ 根本就是不同的问题了 ------

$a = "0";
$b = "0.0";
print_r(var_export(strcmp($a, $b) === 0, true) . "\n"); // false
print_r(var_export($a === $b, true) . "\n"); // false

问题是 0.0 => "0.0" 如何得到
$z = 0.0;
$z = $z === 0.0 ? "0.0" : "-1";

参考

PHP How to distinguish 0 from 0.0
https://stackoverflow.com/questions/38992017/php-how-to-distinguish-0-from-0-0

