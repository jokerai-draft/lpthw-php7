<?php
/*

要求比较两个变量是否相等(class, properties' type, properties's value)
(不看 object 指向同一块内存，不看对象地址)
(即使不指向同一个内存块, 也可以 内容相等)
(惯例 1 关心内容 包括 properties' value, properties' type 2 equal 函数 3 若是动态语言 所谓的 strictness 杜绝隐式类型转换)

参考
在C#中，如果需要对两个对象进行相等判断。不外乎两种情况，判断两者的值相等或者判断两者的引用地址相同。一般情况下，我们需要对值类型对象判断值相等（不清楚值类型和引用类型的可以自行百度），对引用类型对象判断指向地址相同

作者：村上春竹
链接：https://www.jianshu.com/p/237681cf8e68

参考
php equal
https://github.com/eloquent/equality

参考
java equal
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

说明
动态语言 并不指定类的属性的 type
在 php 里如何实现 对两个变量是否相等的判断？
serialize 结果 + serialize 隐式转换副作用的去除 (办法可以是 1 2 3 , 1 明确规定类的属性的类型 type )

serialize 结果保证了 same properties' value
serialize 隐式转换副作用的去除 保证了 same properties' type

https://www.php.net/manual/en/language.oop5.properties.php

