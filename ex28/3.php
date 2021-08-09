<?php
/*

// 自定义 非标量值的相等

参考1 (它能返回什么)
如果想要比较 基于引用的相等性判断 那么可能是设计问题 --- 大部分情况下 === 全等判断是满足要求的

参考2 (我能要求返回值是什么)
两个要求是可以理解的

情况一里，要求比较两个对象(两个指针)是否指向同一个内存块
情况二里，要求较两个对象内容是否相等 -- 自定义 非标量值的相等

----------

php 里提供的判断办法是： 直接判断 对象的内容
php check if same object - Google 搜索

php 里说的相等性
1 比较两个对象内容是否相等 (两个对象的内容 是否有相等性)(内容就包括了 对象的 type 、对象的 value (作为一个 Expression 是否相等 即 作为一个表达式 是否全等 === )，对象的 class )
2 比较两个对象(两个指针)是否指向同一个内存块



参考
php check if same object - Google 搜索
这里聊过一次 php 如何通过实现自己的 一个 interface Comparable (返回 -1 0 1 就像 bccomp ) 来 比较对象
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java
  这里用了 serialize 来实现 == 比较
  serialize 方案的弱点是 并没有 专门计算**递归各项值**
