
object 的相等性的两种体现
(object equality)

// 1
possibly SAME INSTANCE objects
比较对象的指针: 意义是 作基于引用的相等性判断 (基于内存位置的相等性判断) ，办法是 若两个指针指向同一个对象 则两个变量必然相等，此时 两个变量符号就是两个指针

比较对象指针的办法 === 全等

参考
全等比较 是比较指针
https://www.php.net/manual/en/language.oop5.object-comparison.php

https://stackoverflow.com/questions/57847079/php-how-to-check-two-references-are-pointing-to-the-same-underlying-object-me

参考
基于引用的相等性判断
https://www.cnblogs.com/InCerry/p/go-vs-csharp-part-3-compiler-runtime-type-system-modules-and-everything-else.html

参考
a unique object identifier
https://docs.microsoft.com/en-us/dotnet/api/system.object.gethashcode?view=net-5.0#code-try-1
用作哈希 key 的一个 object
https://wizardforcel.gitbooks.io/effective-csharp/content/7.html
```
using System;

class YourClass
{
    int x;
}

public class Program
{
    public static void Main()
    {
        Console.WriteLine("Hello World");
        YourClass x = new YourClass();
        YourClass y = new YourClass();
        YourClass z = y;
        bool b1 = x == y;
        Console.WriteLine(b1 ? "yes" : "no"); // no
        bool b2 = y == z;
        Console.WriteLine(b2 ? "yes" : "no"); // yes
    }
}
```
C#中的相等判断：==和equals
https://www.jianshu.com/p/237681cf8e68 # 一般情况下，我们需要对值类型对象判断值相等（不清楚值类型和引用类型的可以自行百度），对引用类型对象判断指向地址相同
C# Equals - Google 搜索
https://docs.microsoft.com/en-us/dotnet/api/system.object.equals
https://thomaslevesque.com/2020/05/15/things-every-csharp-developer-should-know-1-hash-codes/


// 2
not SAME INSTANCE objects
比较对象的内容


比较对象内容的办法
1 serialize
2 IComparable

参考
serialize
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105

java hashcode 的问题

https://www.cnblogs.com/InCerry/p/go-vs-csharp-part-3-compiler-runtime-type-system-modules-and-everything-else.html


