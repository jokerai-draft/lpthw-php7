#
一种获得函数集的方式

反射 (直接获取了某个类的某个函数, 获取之后可以执行)
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor/29196515#29196515
php parent constructor - Google 搜索

反射 (直接获取了某个类的成员)
https://stackoverflow.com/questions/9866920/whats-the-fastest-way-to-compare-two-objects-in-php/51100930
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
php compare object - Google 搜索

工厂模式
https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php
multiple constructor - Google 搜索

工厂模式
new static()   new self()
https://stackoverflow.com/questions/11710099/what-is-the-difference-between-selfbar-and-staticbar-in-php
static 离实际干活儿的实例更近

静态类
https://www.php.net/manual/zh/language.oop5.static.php 无类的实例, 类变量也并不在实例之间共享 (https://www.php.net/manual/zh/language.oop5.cloning.php#在实例之间共享类变量静态变量)
大量用到了静态类, 此时 如果没有 self 则无法写完静态类的第一个方法 也无法获得静态类数据
https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer 明显用到了静态类
静态类 静态方法 self::aStaticMethod() 静态属性 self::$version
静态类消费者 静态方法 Lib::getCallCounter() 类变量 Lib::$version
https://www.php.net/manual/zh/language.oop5.static.php
