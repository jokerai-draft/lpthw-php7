
对象相等性
为什么要(执着于)判断对象相等性？难道不是 获得某值 然后后续操作 (固化层) 就 OK 了吗
你应该执着于值阿 (也即 对象的内容 )  <|| procedural programming 看重返回结果胜过一切

对象相等性的判断：
直接从内存块判断 (指针所指向的内存块的内存地址)
从对象的内容判断 (对象 type , 对象 class , 对象 value ... 用全等判断 有一个不相等 就是不相等)


java 里说的相等性：
(两个指针指向同一个内存块)(基于引用的相等性判断)
1 比较两个实例是否相等 (类的实例，本身是一个指针 reference 指向内存块)
2 以符合相等性的方式来计算实例的hashcode (实例相等hashcode必然相等)

java 里提供的判断办法是： 先判断 hashcode 再判断 对象的内容
https://www.cnblogs.com/InCerry/p/go-vs-csharp-part-3-compiler-runtime-type-system-modules-and-everything-else.html

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

