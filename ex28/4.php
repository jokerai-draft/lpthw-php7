<?php
/*

不去探索 "基于引用的相等性判断"
目前唯一指定基于引用的相等性判断 就是 === 全等判断

// 1 何为 基于引用的相等性判断

先从数据类型说起
https://stackoverflow.com/questions/6623130/scalar-vs-primitive-data-type-are-they-the-same-thing
再从非标量值的相等说起
php compare object - Google 搜索
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/

得出 对象相等性的一种思路 (可以看作 interface Comparable 的实现思路)


// 2 不去探索 基于引用的相等性判断

https://www.php.net/manual/en/language.oop5.object-comparison.php
目前唯一指定基于引用的相等性判断 就是 === 全等判断
其它不用探索

// 3 仅去探索 基于内容的相等性判断

php compare object - Google 搜索
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/

比如 serialize 方案
https://stackoverflow.com/questions/57847079/php-how-to-check-two-references-are-pointing-to-the-same-underlying-object-me/64894740#64894740
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

比如 反射方案 ReflectionClass (专门计算**递归各项值**)
https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
https://stackoverflow.com/questions/9866920/whats-the-fastest-way-to-compare-two-objects-in-php/51100930




// 4 何时去探索 基于引用的相等性判断

// 一开始就没有引入多线程环境 の 类型系统，才会分标量值和复合值
// 引入了 标量值/复合值（复合类型）这一对矛盾

// 一开始就没有引入多线程环境 の 类型系统，必须整体把握 整体方向要把握住 < || 这里的 data type 和别的情况下说的 data type 根本不是一回事
// https://tieba.baidu.com/p/7484953819?fid=3255599&pid=140710851063&cid=0&red_tag=1912670560#140710851063

C# equal object - Google 搜索

https://www.jianshu.com/p/237681cf8e68 C#中的相等判断：==和equals
在C#中，如果需要对两个对象进行相等判断。不外乎两种情况，判断两者的值相等或者判断两者的引用地址相同。一般情况下，我们需要对值类型对象判断值相等（不清楚值类型和引用类型的可以自行百度），对引用类型对象判断指向地址相同

https://docs.microsoft.com/en-us/dotnet/api/system.object.equals

php equal object - Google 搜索

https://stackoverflow.com/questions/57847079/php-how-to-check-two-references-are-pointing-to-the-same-underlying-object-me

