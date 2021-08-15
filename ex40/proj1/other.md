
接口相关报错记录
implement an interface
https://www.php.net/manual/en/language.oop5.interfaces.php

派生相关报错记录
php abstract class
php virtual function

派生相关报错记录
php parent constructor - Google 搜索 如何获得父类函数集
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor/29196515#29196515 反射获取父类函数集

派生相关报错记录
multiple constructor php // static self 如何调用父类方法 - 如何获得父类函数集
https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php
parent::__construct();
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor
工厂方法
new static()   new self() , 推荐是 return new static() 替换 return new self()
https://stackoverflow.com/questions/11710099/what-is-the-difference-between-selfbar-and-staticbar-in-php/64072873#64072873
static 离实际干活儿的实例更近

派生相关报错记录
本身应该给 interface 做的, 现在在 abstract class 做了
同样是要求另一个函数集实现某些函数名, 有强制性

接口相关报错记录
接口里不包含 "如何初始化一个对象" 这层关系
接口里不包含对象状态(状态保持 如何唤醒另一个状态集里的状态)

派生相关报错记录
不是父类子类，是 abstract concrete

派生相关报错记录
self static parent
* https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664
(何时故意破坏 encapsulation https://stackoverflow.com/a/1557635 本来就是函数集呀)
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor/1557635#1557635
在普通类里, self 离实际干活儿的实例很远
https://www.php.net/manual/en/language.oop5.late-static-bindings.php
PHP5想让继承变的比Java更简单 故而 只在明确指向 parent 的时候会调用 extended class 父类方法
https://www.cnblogs.com/sunsky303/p/13229552.html

派生相关报错记录
后期静态绑定的写在哪？写在 extended class ，等于是 extended class 是 caller, extending class (不得设置private) 是 callee
https://www.php.net/manual/zh/language.oop5.late-static-bindings.php

派生相关报错记录
不会实例化的类
在写工具类时 self 用于 静态变量 (不会实例化的类 比如 工具类 完全不涉及 extended 或被 extend)
https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer

静态类相关报错记录
静态类的使用
- 普通类, 不是静态类
https://stackoverflow.com/questions/45476515/whats-the-difference-between-public-static-and-public-function-in-php
https://www.php.net/manual/zh/language.oop5.static.php
- 静态类
https://www.php.net/manual/zh/language.oop5.static.php
常数
https://www.php.net/manual/zh/language.oop5.constants.php

静态类相关报错记录
不会实例化的类 静态类
报错 Typed static property must not be accessed before initialization
php static class initializer - Google Search
https://stackoverflow.com/questions/59265625/why-i-am-suddenly-getting-a-typed-property-must-not-be-accessed-before-initiali

派生相关报错记录
php class variable nullable when
 "uninitialised" state of typed property
https://stackoverflow.com/questions/14097258/is-a-property-default-value-of-null-the-same-as-no-default-value


普通类相关报错记录
php typed property 相关问题
The uninitialized state https://php.watch/versions/7.4/typed-properties
Typed static property must not be accessed before initialization
https://stackoverflow.com/questions/59265625/why-i-am-suddenly-getting-a-typed-property-must-not-be-accessed-before-initiali
这里说了 For auto-generated IDs, the recommended way forward is to change the type declaration to:
 private ?int $id = null;
 private ?string $val = null;
null safety
对于语言检测方面( an uninitialized state of a property )的报错, 不建议用 isset 规避报错
https://stackoverflow.com/questions/14097258/is-a-property-default-value-of-null-the-same-as-no-default-value
