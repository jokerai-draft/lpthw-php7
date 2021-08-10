<?php
/*

关于对一个对象的 internal object 的递归判断
php compare object properties

参考 比较两个对象的内容相等性的办法
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/

在此思路之下，不用到 ReflectionClass 行不行？

1 只用 serialize
答：只用 serialize 不行，因为 serialize 将触发类型的隐式转换
---- 参考 ex28/2x/23.php serialize 隐式转换的问题  没有 strictness about the equality https://github.com/eloquent/equality

2 serialize + 想办法屏蔽 serialize 隐式转换功能(带来的影响)
比如 对 object 的 class 声明属性类型

3 一个简单例子，不用 ReflectionClass 的例子
https://stackoverflow.com/questions/20531967/comparing-2-objects-php
- 没用 serialize
- 用了全等号 === 比较标量值
(如果也更加复杂的规模，比如 类里有别的类的实例，那么 最终各个类都需要实现自己的 equal 函数)
