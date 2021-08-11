<?php
/*

求比较两个变量是否指向同一个内存块
(不看 object 内容)
(若指向同一个内存块 那么 所谓的内容也一定是相等的，反之不然)

(惯例 1 也叫做 基于引用的相等性)

参考
获得一个对象的内存地址
https://www.cnblogs.com/InCerry/p/go-vs-csharp-part-3-compiler-runtime-type-system-modules-and-everything-else.html
Go与C#对比 第三篇：编译、运行时、类型系统、模块和其它的一切

参考
map 依赖于 hash 的值, hash 的值用语 identify an object in map
c# variable hashcode - Google 搜索
A hash code is a numeric value that is used to insert and identify an object in a hash-based collection such as the Dictionary<TKey,TValue> class, the Hashtable class, or a type derived from the DictionaryBase class.
The GetHashCode method provides this hash code for algorithms that need quick checks of object equality.
https://docs.microsoft.com/en-us/dotnet/api/system.object.gethashcode?view=net-5.0

参考
== 符号 (判断对象相等性) 在 C# 的具体作用是：
对 object (引用类型) 比较地址（ string 例外）
https://www.jianshu.com/p/237681cf8e68
# string 本身是 引用类型 reference type
https://docs.microsoft.com/en-us/dotnet/csharp/language-reference/language-specification/types#reference-types

