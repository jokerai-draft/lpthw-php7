
关于隐式转换带来的问题的记录

// 1
switch 问题
https://www.v2ex.com/t/398773?p=1#r_4862569

隐式的(例如in_array()或switch)时，通常会发生这种情况
https://www.codenong.com/82cc8295d2102d14b88a/

在不涉及 0.0 问题时， strcmp 可以解决 switch 问题
在任何情况下，全等号可以解决 switch 问题

// 2
42 问题

在 PHP8 中，数字和字符比较，会首先把数字转换成字符，再比较
https://www.v2ex.com/t/719690?p=1#r_9844453

严格比较与strcmp()进行比较，而非严格比较进行"智能"比较，如果它们是数字字符串则转换为数字
https://www.codenong.com/82cc8295d2102d14b88a/

不过，在字符串比较方面， == 比较依然比 strcmp 要差，参考经典的 42 问题
https://stackoverflow.com/questions/65040819/why-does-php-8-treat-42-42-as-true

strcmp 可以解决 42 问题
print_r(var_export(strcmp("42", " 42") === 0, true) . "\n"); // false
print_r(var_export(strcmp("42", "42 ") === 0, true) . "\n"); // false

// 31
"0.0" 和 "0" 问题

print_r(var_export("0" == "0.0", true) . "\n"); // true

strcmp 可以解决 "0.0" 和 "0" 问题
print_r(var_export(strcmp("0", "0.0") === 0, true) . "\n"); // false

全等号 可以解决 "0.0" 和 "0" 问题
print_r(var_export("0" === "0.0", true) . "\n"); // false

// 32
0.0 和 0 问题

print_r(var_export(0 == 0.0, true) . "\n"); // true
print_r(var_export(strcmp(0, 0.0) === 0, true) . "\n"); // true

全等号可以解决 0.0 和 0 问题
print_r(var_export(0.0 === 0, true) . "\n"); // false

// 4
"0.0" 字符串的获取的问题

$z = 0.0;
$x = 1.1 - 1.1;
print_r(var_export($z === $x, true) . "\n"); // true

print_r(gettype($z) . "\n"); // double
$str = (string)$z;
print_r($str . "\n"); // 0
$str = strval($z);
print_r($str . "\n"); // 0

赋值法 可以解决 "0.0" 字符串的获取的问题
$str = $z === 0.0 ? "0.0" : "-1";   // 不转换了，直接新赋值
print_r($str . "\n"); // 0.0

https://www.php.net/manual/en/function.strval.php#57559
https://stackoverflow.com/questions/38992017/php-how-to-distinguish-0-from-0-0



// 说明
// 赋值法
// $converted_res = $res === true ? 'true' : 'false';
// $converted_res = $res ? 'true' : 'false';
// https://stackoverflow.com/questions/2795177/how-to-convert-boolean-to-string/2795180 php strval false - Google 搜索
