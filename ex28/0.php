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

// 3

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

// 4

现状是
Unfortunately PHP does not have an inbuilt method
to compare objects strictly without requiring that they be the same instance (same address).

// 5

一种这样的要求，用于判断两个对象的相等性

在此要求一个 equal 函数
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
serialize 本身没有 strictness about the equality ，跟直接用 == 比较没啥区别

