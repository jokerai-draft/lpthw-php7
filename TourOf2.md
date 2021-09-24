#
Tour Of Converter

converter (formatter) 的高级用法


输入 (int)1 输出 (double)1.00

输入 (int)1 输出 (string)"1.00"

### 什么是 formatter

// 数字 1.0 转成 "1.0" 有函数吗
// 数字 1   转成 "1.0" 有函数吗
// 数字 1   转成 "1.00" 有函数吗: 通过 sprintf 控制小数点后位数, 这就是 formatter
```php
$a = 1; // 或 $a = 1.0;
$str = sprintf("%.1f", $a); #=> (string)1.0
```

#### formatter11
对位数有要求
```php
$i = 1;
$str = sprintf("%.2f", $i);

print_r($i);
print_r(gettype($i));
print_r($str);
print_r(gettype($str));
```

#### formatter12
对位数无要求: 对字符串的小数点后面的位数无要求。一定出现 formatter 目的失灵
```php
$i = 1;
$str = (string)$i;

print_r($i);
print_r(gettype($i));
print_r($str);
print_r(gettype($str));
```

#### formatter13
对位数有要求: 对字符串的小数点前面的位数 也有要求, 用零填补, 总共五位
```php
$i = 1;
$str = sprintf("%05.2f", $i);

print_r($i);
print_r(gettype($i));
print_r($str);
print_r(gettype($str));
```

#### formatter13
对位数有要求: 对字符串的小数点前面的位数 也有要求, 用空格填补, 总共五位
```php
$i = 1;
$str = sprintf("%5.2f", $i);

print_r($i);
print_r(gettype($i));
print_r($str);
print_r(gettype($str));
```

#### formatter21
对位数有要求:
对字符串的小数点后面的位数 有要求, 用零填补, 小数点后总共4位
对字符串的小数点前面的位数 也有要求, 用零填补, 小数点前总共8位
```php
$d = 1.23;
$str = sprintf("%013.4f", $d);

print_r($d);
print_r(gettype($d));
print_r($str);
print_r(gettype($str));
```

#### formatter22
对位数无要求: 对字符串的小数点后面的位数无要求。一定出现 formatter 目的失灵
```php
$i = 1.23100;
$str = (string)$i;

print_r($i);
print_r(gettype($i));
print_r($str);
print_r(gettype($str));
```

#### formatter31
对位数有要求:
对字符串的小数点后面的位数 有要求, (四舍五入规则不明), 小数点后总共4位
```php
$d = 0.0219589;
$str = sprintf("%.4f", $d);

print_r($d);
print_r(gettype($d));
print_r($str);
print_r(gettype($str));
```
```php
$d = 1.233251544231821;
$str = sprintf("%013.4f", $d);

print_r($d);
print_r(gettype($d));
print_r($str);
print_r(gettype($str));
```

#### formatter32 (ignored)
(work, but not reccommend. Recommend formatter33)(它揭示了著名的 "2.05 问题")
对位数有要求:
对字符串的小数点后面的位数 有要求, (四舍五入规则: round down 卡位数 floor), 小数点后总共4位
```php
$d = 0.0219589;
// $d = round($d, 4, PHP_ROUND_HALF_DOWN);
$d = floorDec($d, 4);
$str = sprintf("%.4f", $d);

print_r($d);
print_r(gettype($d));
print_r($str);
print_r(gettype($str));

function floorDec($val, $precision = 2) {
    if ($precision < 0) { $precision = 0; }
    $numPointPosition = intval(strpos($val, '.'));
    if ($numPointPosition === 0) { //$val is an integer
        return $val;
    }
    return floatval(substr($val, 0, $numPointPosition + $precision + 1));
}
// https://stackoverflow.com/questions/12277945/php-how-do-i-round-down-to-two-decimal-places/26491492#26491492
```

#### formatter33
对位数有要求:
对字符串的小数点后面的位数 有要求, (四舍五入规则: round down 卡位数 floor), 小数点后总共4位
```php
$d = 0.0219589;
// $d = round($d, 4, PHP_ROUND_HALF_DOWN);
$d = bcdiv($d, 1, 4);
$str = sprintf("%013.4f", $d);

print_r($d);
print_r(gettype($d));
print_r($str);
print_r(gettype($str));

// https://stackoverflow.com/questions/12277945/php-how-do-i-round-down-to-two-decimal-places/55239161#55239161
```

完整思路:
数字 -> 四舍五入 -> 数字 -> formatter -> 字符串

简短思路:
数字 -> formatter -> 字符串

错误思路:
数字 -> 字符串
