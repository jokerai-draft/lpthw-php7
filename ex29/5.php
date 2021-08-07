
false 的等价物 (关于 == 这种会发生(恶性)隐式转换 type casting 的比较符)

"$val == false " 的等价物是 empty($val)
"$val == false " 的含义是

参考 == 的意义
(理论上应该尽量避免使用 == loose comparison ，常见说法是它不够 type safe ，它有隐式转换， === 只有在 same type same value 的时候返回 true )
https://stackoverflow.com/questions/8236354/php-is-null-when-empty/15607549#15607549
https://stackoverflow.com/questions/80646/how-do-the-php-equality-double-equals-and-identity-triple-equals-comp

https://www.php.net/manual/zh/language.operators.comparison.php
https://www.php.net/manual/zh/types.comparisons.php * 以它为准，但尽量避免 == 的发生

参考 empty
https://www.php.net/manual/zh/function.empty.php



