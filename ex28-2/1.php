<?php
/*

php 对于 对象判断 的支持 是怎样的

https://github.com/eloquent/equality
// 说明了 php 隐式转换之下的 对象相等性判断 并不完善，故而需要自己写
====>

https://www.php.net/manual/en/language.oop5.object-comparison.php

https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
// 故意跳过了 对象相等性 的问题

Comparing objects with == and ===
http://www.hackingwithphp.com/6/12/0/comparing-objects-with-==-and-===
都是不完备的：要么 直接比较内存地址，要么 发生隐式转换


====>>
一种可能的写法
https://stackoverflow.com/questions/20531967/comparing-2-objects-php
- 没用 serialize
- 用了全等号 === 比较标量值
- class property 也就是没有 internal object 都是标量值
