
对象相等性的一种思路 (可以看作 interface Comparable 的实现思路)
比较 object 时

possibly (only care) SAME INSTANCE objects  <-> 在乎的是 对象内存地址是否一样,,两个指针是否指向同一内存块
比较对象的指针: 若指针一样则必然相等，若不方便比较指针是否一样 OR 只在乎对象的值是否一样


not (care) SAME INSTANCE objects <-> 在乎的是 对象的**递归各项值**是否一样
比较对象的内容
看 两个对象的内容 是否有相等性，内容就包括了 对象的 type 、对象的 value (作为一个 Expression 是否相等 即 作为一个表达式 是否全等 === )，对象的 class


https://www.php.net/manual/en/language.oop5.object-comparison.php

https://stackoverflow.com/questions/9866920/whats-the-fastest-way-to-compare-two-objects-in-php/51100930

https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105







关于 "比较对象的指针"
SAME INSTANCE same address
https://www.php.net/manual/en/language.oop5.object-comparison.php


check if the two variable is point to the same address

When the identity operator (===) is used, the variables of an object are identical yes and only if they refer to the SAME INSTANCE of the same class.

https://stackoverflow.com/a/57847203






关于 "比较对象的内容"

C# 给出的 solution 是 Equals 方案
https://www.jianshu.com/p/237681cf8e68 C#中的相等判断：==和equals
https://docs.microsoft.com/en-us/dotnet/api/system.object.equals
这里默认了是同 class 的不同 instance

PHP 给出的 solution 是 serialize 方案

php compare object - Google 搜索
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/

比如 serialize 方案
https://stackoverflow.com/questions/57847079/php-how-to-check-two-references-are-pointing-to-the-same-underlying-object-me/64894740#64894740
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

比如 反射方案 ReflectionClass (专门计算**递归各项值**)
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
https://stackoverflow.com/questions/9866920/whats-the-fastest-way-to-compare-two-objects-in-php/51100930


