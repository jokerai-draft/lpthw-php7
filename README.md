# lpthw-php7

爆点备注
```
函数多参数 ex18.php
获得可打印的 true 和 false 字符串 (php print parse boolean variable to string) ex4/1.php
```
```
布尔问题
打印 https://stackoverflow.com/a/2638227
判断和高级判断 (其它类型变量转换为布尔值) https://stackoverflow.com/questions/7336861/how-to-convert-string-to-boolean-php/15075609 # 提供了 "十六合一" 式的  scalability
```
```
字符串组合问题 ex6.php
https://stackoverflow.com/a/5606037 string formatter and sprintf
```


错误的调试办法 (打印语句 debug)
```
echo (bool)false;
print_r(false);
echo (bool)(5 <= -2);
print_r(5 <= -2);
echo $a;
print_r($not_there);
```

调试办法 (打印语句 debug)
```
<?php

print_r(var_export(false, true) . "\n");  #=> false
print_r(var_export((5 <= -2), true) . "\n");  #=> false
print_r(var_export($not_there, true) . "\n"); #=> null
print_r(var_export(true, true) . "\n"); #=> true

$a = array_key_first([]);
echo $a;
print_r($a);
print_r(var_export($a, true) . "\n");  #=> null

$a = is_int([]);
echo $a;
print_r($a);
print_r(var_export($a, true) . "\n");  #=> false

$a = is_int(2);
echo $a; #=> 1
print_r($a); #=> 1
print_r(var_export($a, true) . "\n");  #=> true
```

在可能有野指针出现时，在进入 IF 语句之前，通过赋值 (变量默认值) 避免野指针
而不是在 IF 语句里使用对野指针包容性极高的函数 比如 empty is_numeric
```
$a ??= "DEFAULT";  # 等号右边是默认值, 在可能有野指针出现时，避免了 null值做默认值的情况
$num ??= -1;
$bool ??= false;
$res ??= [];

$a = $a ?? "DEFAULT";
print_r($a . "\n"); #=> DEFAULT

$num = $num ?? -1;
print_r($num . "\n"); #=> -1

$bool = $bool ?? false;
print_r(var_export($bool, true) . "\n");  #=> false

```
