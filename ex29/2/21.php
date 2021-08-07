
排除非单一职责函数对控制流的影响

empty 和 is_numeric 这种（模糊函数 十六合一函数 "毒草"(对野指针的容忍)(很智能? 但不符合单一职责原则)）带来的 控制流不稳定，是从哪里引入的不稳定性？
影响控制流(稳定)的因素 - 判断语句 - IF 语句的显式转换

IF 语句的显式转换 // 建议谨慎使用或不使用
if (empty(Expression)){...}
if (is_numeric(Expression)){...}

https://stackoverflow.com/questions/8236354/php-is-null-when-empty/15607549#15607549

理由
print_r(var_export(empty(false), true) . "\n"); #=> true

$bool = false;
print_r(var_export(empty($bool), true) . "\n"); #=> true

print_r(var_export(empty(0), true) . "\n"); #=> true
print_r(var_export(empty("0"), true) . "\n"); #=> true
print_r(var_export(empty(false), true) . "\n"); #=> true
这些是什么意味阿 ... 把 "0" 的输入 解构成 empty 是什么意思呀呀

理由

print_r(var_export(is_numeric(" 12   "), true) . "\n"); #=> false
print_r(var_export(is_numeric(".18"), true) . "\n"); #=> true


说明
先确实不是野指针
先确定变量类型 或将变量转化为所需类型
然后再用 (bool)$var 或 is_int($var) 或 ($var === 13) 做明确的布尔判断
这样就 "完成了控制流"
已经完成了就不再需要 empty 了


说明
判断纯数字也可以使用正则表达式 preg_match('/^\d+$/i', $var)
https://www.jianshu.com/p/913d09b68388

说明
最好不要使用那些返回 null 的函数
最好不要使用那些 能够把null当作参数的函数  (一个能处理 null 情况的强大函数)
最好不要使用 null 表达式、不要使用野指针

最好：
(IF 语句，一个基本原则就是不要传入 null 指针变量)
1 推断出哪里可能出现 null 的变量 2 不让 一个可能为null的变量 作为参数传入一个函数、传入一个 IF 语句 3 对一个变量 preprocess 之后再传入函数
- 比如 $a = $a ?? ""; 处理过的 $a 的默认值就是 空字符串(或0数字) 故而不会出现野指针

