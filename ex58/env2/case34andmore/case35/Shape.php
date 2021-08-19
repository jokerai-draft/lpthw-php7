<?php

abstract class Shape # 等于 normal class + 不支持实例化, 目前这个 shape 的例子看不出来, 如果用 Db 的例子会好一点
{
    public $area;
    public $perimeter;
    public function __toString() { return get_class($this); }
    public function reportArea() { return "REPORT shape area: " . $this->area; }

}
// 细节1
// abstract class non-abstract method # 这里 C# 和 php 都支持 abstract class 里的普通函数
// 细节1
// abstract class property # 这里 C# 给 property 加了 abstract modifier - 太乖了 too obedient , 但 php 里还是普通属性
// php 会少了很多意义之争吧 https://blog.codinghorror.com/properties-vs-public-variables/

/*
Docs .NET C# guide Programming guide - Arrays
https://docs.microsoft.com/en-us/dotnet/csharp/programming-guide/arrays/using-foreach-with-arrays


Docs .NET C# guide Fundamentals - Inheritance in C# and .NET
https://docs.microsoft.com/en-us/dotnet/csharp/fundamentals/tutorials/inheritance#designing-abstract-base-classes-and-their-derived-classes Shape class

这个文档写的显然是满足不同层次读者的需要的
(写得稀碎 写得稀烂)

这个就不太像瘟疫工厂
lpthw
rubyguides https://www.rubyguides.com/ruby-tutorial/loops

这个就很像瘟疫工厂
.NET docs (好像让你自己编书, 又不教你怎么编书)
.NET what tutorial (将一堆 tutorials (Get started tutorials + Fundamentals tutorials + the Tutorials + How-to C# articles) 整体看就是写得稀碎)
learn x in y minutes (没有给你编书的空间)

即使没用瘟疫工厂的概念，感觉唯一能让完整从头到尾看下来的也只有 C# programming guide ，同时 以 CLS 作为参考
// 阿 期待的是一个 不稀碎的东西 ... 但是 "C# programming guide" 让你失望了
《这个网站写的显然是满足不同层次读者的需要的》 自助餐
可能有 好一点 https://www.zhihu.com/pub/book/119891988 C#程序设计任务式教程

*/
