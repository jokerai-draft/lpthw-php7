
对象相等性的一种思路 (可以看作 interface Comparable 的实现思路)
比较 object 时
遍历对象的所有属性 (type 和 value) 依次比较是否相等 // <- 肯定不是 SAME INSTANCE 了
  具体是在 class 里写 isEqual 方法时候 用 ReflectionClass 反射


https://stackoverflow.com/questions/9866920/whats-the-fastest-way-to-compare-two-objects-in-php/51100930

https://www.librebyte.net/en/programming/how-to-compare-objects-in-php/
