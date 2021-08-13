
转化为字符串

其它 数据类型 (标量类型 bool int double) 转化为 字符串 (标量类型 string)
// 任一标量类型 => 字符串 仍然是标量类型变量

https://www.php.net/manual/zh/language.types.intro.php

如果是 float 那么要考虑(float formatter 比如 sprintf formatter)是否保护无效零位的问题
