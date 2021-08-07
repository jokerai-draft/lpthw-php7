
变量赋值
———— 在可能有野指针出现时，通过赋值 (变量默认值) 避免野指针

既然是 if (Expression) {...} 参与控制流，而判断语句可以是一个变量 ———— 而变量可以是野指针
那么 直接让变量避免 null 值 也可以降低 IF 语句 (所需要的)的复杂度

避免 Expression 出现 null 值：
赋值 (变量默认值)
```
$a ??= "DEFAULT";  // 等号右边是默认值：如果 $a 之前有值则不变，若 $a 为 null 则赋值为字符串
$num ??= -1;       // 等号右边是默认值, 避免了 null值做默认值的情况
$bool ??= false;
```
即
```
$a = $a ?? "DEFAULT";
print_r($a . "\n"); #=> DEFAULT

$num = $num ?? 12;
print_r($num . "\n"); #=> 12

$bool = $bool ?? false;
print_r(var_export($bool, true) . "\n");  #=> false

```

参考

null coalescing operator
https://stackoverflow.com/questions/34571330/php-ternary-operator-vs-null-coalescing-operator/34571460

null coalescing assignment ??= operator in PHP 7.4

https://stackoverflow.com/questions/59102708/what-is-null-coalescing-assignment-operator-in-php-7-4

https://www.php.net/manual/en/migration74.new-features.php
