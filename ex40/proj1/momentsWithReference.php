
multiple constructor
Best way to do multiple constructors in PHP
https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php

extending class 无 constructor method
https://www.php.net/manual/zh/language.oop5.inheritance.php

extending class 有 constructor 和 destructor
https://www.php.net/manual/en/language.oop5.decon.php

extending class constructor 的写法, 当有 parent 时
parent 与 self
https://stackoverflow.com/questions/39748226/must-i-call-parent-construct-in-the-first-line-of-the-constructor

extending class
对于 parent 的 hack
https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor/29196515#29196515

类变量
关键词 php clone object - Goole Search
https://www.php.net/manual/zh/language.oop5.cloning.php 可以在多个实例之间共享的变量
这个是普通类 (不是静态类) 在类的实例之间共享对象

实例变量
关键词 php object compare
https://www.php.net/manual/zh/language.oop5.object-comparison.php




===> 静态环境

何时对 static context 静态环境 有印象: 静态环境 静态类
静态环境 in static context
https://www.php.net/manual/en/language.oop5.static.php

参考 非静态环境 in non-static context
https://www.php.net/manual/en/language.oop5.late-static-bindings.php

说明 在非静态环境里可能有复杂的函数查找机制
既然是函数查找机制, 必然涉及到 对象创建、函数集


===> 静态类 x 静态环境
(不实例化的类)
(静态属性静态方法)

何时对 self 有印象: 静态类
无类的实例, 类变量也并不在实例之间共享
大量用到了静态类, 此时 如果没有 self 则无法写完静态类的第一个方法 也无法获得静态类数据
https://code.tutsplus.com/courses/php-fundamentals/lessons/writing-a-data-abstraction-layer 明显用到了静态类
静态类 静态类方法 self::aStaticMethod() 静态类属性 self::$version
静态类消费者 静态类方法 Lib::getCallCounter() 静态类属性 Lib::$version
https://www.php.net/manual/zh/language.oop5.static.php

参考 ex43/example1/Lib.php 静态类属性 静态属性





==> 带有静态属性的普通类 x 非静态环境
(静态属性静态方法在普通类实例化之后依然起作用)
(非静态环境)(static variable)

何时对 static 有印象: (普通类)对象
(https://www.php.net/manual/zh/language.oop5.cloning.php#在实例之间共享类变量静态变量)

参考 ex43/example2/Blueberry.php 静态属性

==> 普通类

参考 ex43/example4/Blueberry.php 实例属性






[ 涉及对象创建: 静态类无此问题, 此问题只会出现在普通类语境里. 非静态环境 ]

=====> 普通类细节: 对象创建问题
对象创建办法1
construct ($a = new CLASSNAME(); 返回 object)
对象创建办法2
工厂模式($a = CLASSNAME::fromXml($xml); 返回 new static();)

https://www.php.net/manual/zh/language.oop5.decon.php#language.oop5.decon.constructor.static

说明
在可能涉及派生的情况下, 返回 new static(); 的额外好处
https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php
* https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664
考虑到可能涉及派生的情况, 工厂模式里绝对杜绝返回 new self();
// static 离实际干活儿的实例更近
工厂模式只用离实际干活儿的实例最近的 new static();


说明2
在非静态环境里, 某个关键字 把调用栈 压到类 实际干活儿的实例里  --- static
在非静态环境里, 某个关键字 把调用栈 处于被调用的类 --- self
https://www.php.net/manual/en/language.oop5.late-static-bindings.php
* https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664
// 那么也可以出题了: 在涉及派生时候如何获得想要的函数集




[ 涉及派生: 静态类无此问题, 此问题只会出现在普通类语境里. 非静态环境  ]

==> 普通类: 在涉及派生时 (如何得到想要的函数集)

获得函数集的办法们
* https://www.php.net/manual/zh/language.oop5.late-static-bindings.php#122664
通过函数, 找到函数所属于的域, 返回 self 是返回 此域; 返回 parent 是返回此域的 parent域
通过静态类找到的域, 返回 static 是返回此域

机制:
static in static 后期静态绑定
(后期静态绑定 ... 居然也是用了 static 关键字)

何时对 static 有印象: (普通类)对象

https://stackoverflow.com/questions/11710099/what-is-the-difference-between-selfbar-and-staticbar-in-php/64072873#64072873




何时对 parent 有印象: (普通类)对象
在普通类里, parent 是 self 的上一级
https://www.php.net/manual/en/language.oop5.late-static-bindings.php

何时对 self 有印象: (普通类)对象
在普通类里(普通类), self 是函数定义于的域, 不是实际干活儿的实例的域
https://www.php.net/manual/en/language.oop5.late-static-bindings.php






新型数据类型 nullable

何时对 ?string 有印象
经典报错 PHP Fatal error:  Uncaught Error: Typed property must not be accessed before initialization
https://stackoverflow.com/questions/59265625/why-i-am-suddenly-getting-a-typed-property-must-not-be-accessed-before-initiali
https://php.watch/versions/7.4/typed-properties

何时对 ?string 有印象
经典 无参数的 constructor 调用 public function __construct(?string $description){ }
https://stackoverflow.com/questions/60934321/can-i-declare-a-typed-property-so-that-it-accepts-a-null-value-as-well
