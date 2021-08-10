<?php
/*

// 对象 (object) 对象的判断 对象相等性的判断，基本情况是怎样的:

// 0

两个对象 是否指向同一块内存，这是一个判断
两个对象 所有参数 (class, status) 是否有数值上的相等，这是一个判断 (可递归判断每一个 property 是否相等，若相同则 status 相等)

// 1

// object 有一个 class 可以打印

// 2

// object 有内存地址，可以查看

// 3

// object 有内容，可以查看
                      值和数据类型(多线程环境之下的 值类型 引用类型)(单线程环境之下的 标量值标量类型 组合类型)

// 4

// object 的 equal 和 identical

如果指向同一个内存块，那么两个对象就是 identical
如果不指向同一个内存块，但内容相等(class, properties's type, properties' value)，那么就是 equal

参考
C#中的相等判断：内存地址和对象内容，==和equals
https://www.jianshu.com/p/237681cf8e68
对于值而言(值类型 or scalar type), 相等性是比较值
对于引用类型 (object or compount type), 相等性是比较内存地址 --> 若不关注内存地址 若只看 object 内容是否相等 是否可以比较？用 equal 函数
