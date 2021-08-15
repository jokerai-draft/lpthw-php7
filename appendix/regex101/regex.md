
常用正则表达式

https://www.v2ex.com/t/795888?p=1#r_10791072

- 找数字
```
匹配 1 字符串
匹配 3 字符串
匹配 2 字符串
$str = "3";
$rule = "/^1$|^2$|^3$/";
if (preg_match($rule, $str)) { echo "bingo"; }
```

完整匹配、不完整匹配
(^ 表示匹配字符串的开始, $ 表示匹配字符串的结束)(| 表示分支条件)
```
$str = "3";
$rule = "/^1$|^2$|^3$/";
if (preg_match($rule, $str)) { echo "bingo"; }
```
说明: 完整匹配 常用于判断用户输入, 不完整匹配 常用于 str_contains 或 strpos 功能


破书
https://deerchao.cn/tutorials/regex/regex.htm

