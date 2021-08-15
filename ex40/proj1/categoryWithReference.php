
---- 普通类 --------

关于 派生的一套
extended class 被派生的类 派生自的类
extending class 派生出的类
#Player
允许 self, parent 和 parent::__construct(); 但一般用不着 self
https://www.php.net/manual/zh/language.oop5.inheritance.php#100005

关于 派生的一套
规则创建
(对父类关系而言) 如何获得父类函数集
parent::__construct();
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor

不规则创建: (对得到变量而言) 跳过父类 construct
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor/1557635#1557635

不规则创建: (对得到变量而言) 工厂方法
(对父类关系而言) 如何获得父类函数集
https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php
new static()   new self() , 推荐是 return new static() 替换 return new self()
static 离实际干活儿的实例更近
https://stackoverflow.com/questions/11710099/what-is-the-difference-between-selfbar-and-staticbar-in-php/64072873#64072873

关于 virtual concrete 的一套
abstract class, virtual methods
concrete class, methods
https://docs.microsoft.com/en-us/dotnet/api/system.io.streamreader?view=net-5.0

关于 接口 的一套
interface
class implements interface
#IPlayable
https://www.php.net/manual/zh/language.oop5.interfaces.php#language.oop5.interfaces.examples

关于 普通类
https://www.php.net/manual/zh/language.oop5.cloning.php 可以在多个实例之间共享的变量
这个是普通类 (不是静态类) 在类的实例之间共享对象





---- 静态类 --------

关于 静态类 的一套
静态类 静态方法 self::aStaticMethod() 静态属性 self::$version
静态类消费者 静态类方法 Lib::getCallCounter() 静态类变量 Lib::$version
https://www.php.net/manual/zh/language.oop5.static.php

