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

变量存在性
https://segmentfault.com/a/1190000014126990 区分一个变量是未被设置还是被设置为 null 

https://cloud.tencent.com/developer/news/657840 PHP 判断数 组key 是否存在, 你用 isset , 他用 array_key_exists , 这关乎 你是否打算让计算机将 v为null 的 kv对 识别为 `key 不合法(不合法的定义是什么)`
```

```

float formatter
float 是一个标量类型, 常用 sprintf formatter 得到某种格式 并得到某种格式的字符串, 可以视为保护无效零位的一种方式
``` ex541/4.php
// 要求前置几位零值
$a = 1.23;
$str = sprintf("%013.4f", $a); // 小数点前 八位, 小数点后 四位
```
``` ex58/env2/case32/script.php
echo sprintf("We got %s rackets: \n", Racket::$counter);
echo sprintf("%s tennis rackets \n", TennisRacket::$counter);
echo sprintf("and %s table tennis rackets \n", TableTennisRacket::$counter);
```


type coercion, [strict type](https://stackoverflow.com/questions/48723637/what-do-strict-types-do-in-php)
```
<?php declare(strict_types=1);
// 注意分号
```
[link](https://php.watch/versions/7.4/typed-properties)
