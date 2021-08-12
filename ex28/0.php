<?php
/*

谈谈 strictness about the equality 的问题

// 1
PHP 内置
== 是 equal
=== 全等 是 identical

==: equal
===: identical
!=: not equal
<>: not equal
!==: not identical
<: less than
>: greater than
<=: less than or equal to
>=: greater than or equal to

// 2

对于标量类型的变量
如果要求 strictness 那么 == 比较是失效的
如果要求 strictness 那么 === 的比较是生效
如果要求 strictness 那么 如果 serialize 能够体现变量类型，那么就是生效的；如果不能体现变量类型，或者在进入 serialize 之前 变量发生了变量类型污染 那么就是失效的，源头失效则判断结果失效 这个和 serialize 无关

变量类型污染可以发生在任何一次赋值的时候

// 31

对于复合类型的变量
如果要求 strictness 那么 == 比较是失效的
如果要求 strictness 那么 那么 如果 serialize 能够体现 private 属性，那么就是生效的；如果只能 public 属性参与 那么 基于 serialize 的比较是失效的

如果是 == 比较两个对象，那么那是没有 strictness 的

this snippet outputs 'equal':
```
$left = new stdClass;
$left->foo = 0;

$right = new stdClass;
$right->foo = null;

if ($left == $right) {
    echo 'equal';
} else {
    echo 'not equal';
}
```
https://github.com/eloquent/equality

// 32

对于复合类型的变量
如果要求 strictness 那么 === 的比较是生效

如果是 === 比较两个对象，那么是有 strictness 但是又多了 SAME INSTANCE 的附加
// 底层是直接比较两个指针所指向的内存块是否为同一个
 (有时候，人们并不在乎 是不是指向同一块内存)
The following snippet outputs 'not equal':
```
$left = new stdClass;
$left->foo = 'bar';

$right = new stdClass;
$right->foo = 'bar';

if ($left === $right) {
    echo 'equal';
} else {
    echo 'not equal';
}
```

// 33

对于复合类型的变量
现状是
Unfortunately PHP does not have an inbuilt method
to compare objects strictly without requiring that they be the same instance (same address).
https://github.com/eloquent/equality

// 4

对于复合类型的变量
一种这样的要求，用于判断两个对象的相等性

在此要求一个 equals 函数
- 用于判断复合类型变量的相等性
- 不判断对象的内存地址 (不关注 两个指针 是否指向同一块内存)
- 判断对象的各个属性是否 数据类型相同
- 判断对象的各个属性是否 数据值相等

后两个是类似 === 全等比较的要求
前一个是类似 == 比较的要求
此 equal 函数 是二者的结合

解法
https://github.com/eloquent/equality


参考
php check if same object - Google 搜索
php check object equal - Google 搜索

说明
最简单的办法是 让两个对象各自都有明确属性数据类型就 OK 了，然后用 == 比较。
这在 == 比较的基础上，杜绝了隐式类型转换

说明
~~serialize 本身没有 strictness about the equality ，跟直接用 == 比较没啥区别，都无法做到 strictness 方面的要求~~
serialize 本身是可以记录数据类型的，但是 若在进入 serialize 之前 变量发生了变量类型污染，那么 serialize 结果也会被污染

说明
=== 无法判断的， serialize 也无法判断
print_r(var_export(1.20 === 1.200, true) . "\n"); // true
print_r(var_export(serialize(1.20) === serialize(1.200), true) . "\n"); // true
这是浮点数判定、如何对 float 显式保护无效零位的问题。关于这一点，可以用 sprintf formatter 搞定浮点数位数并返回字符串
