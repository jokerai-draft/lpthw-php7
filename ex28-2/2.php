<?php
/*

动态语言无处不在的隐式转换对对象相等性判断的影响

隐式转换，这会模糊了 判断对象相等性 之中 对于 properties' type 的关注

一切带有隐式转换发生的对象相等性比较，都是不准的:
- == 等号
- serialize

一切不带有隐式转换的对象相等性比较，是可能被采用的:
- === 全等符号 全等号
- 反射加全等符号的比较

参考
php check object of same property type and value

所以说这个写法是错误的，因为忙活了半天 结果依然是中招 中了隐式转换的招
https://stackoverflow.com/questions/17008622/is-there-a-equals-method-in-php-like-there-is-in-java/17009105#17009105
