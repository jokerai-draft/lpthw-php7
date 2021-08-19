<?php
/*

dog and dog species cards (卡片化)

// php abstract class non-abstract method - Google 搜索

stackoverflow.com/questions/2371490/how-to-declare-abstract-method-in-non-abstract-class-in-php/5480382#5480382
(就像一个普通的 parent class 只不过加了 abstract class 前缀)

解释
Abstract classes can have non-abstract method:
Non-abstract methods can be defined in an abstract class. Those methods will work as the same as normal methods we had in inheritance.

https://tutorials.supunkavinda.blog/php/oop-abstract-classes-methods











说明
如果想让 extender 必须实现某个办法，那么可以用 interface 也可以用 abstract class abstract function
怎么选呢？ 如果不需要写函数体，那么都可以；如果需要写函数体，鉴于 abstract classes can have real methods while interfaces can only have method declarations 所以只能用 abstract class
https://tutorials.supunkavinda.blog/php/oop-abstract-classes-methods
