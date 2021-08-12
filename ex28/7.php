<?php

针对 === 全等符号(为思考起点)的问题

第一个问题
如果仅关心对象的值，那么 全等符号 并不适用

$a = new stdClass();
$a->something = 123;
$b = new stdClass(); // different instance, same class
$b->something = 123;  // same values and type
print_r( var_export($a === $b, true) ); // false
return $a === $b; // false

https://webdevetc.com/programming-tricks/php/general-php/how-does-php-compare-objects/


第二个问题

如果通过换用 == 而让它适用了，那么 == 引入的隐性类型转换又不适用了

$a = new stdClass();
$a->something = 123;
$b = new stdClass(); // different instance, same class
$b->something = 123;  // same values and type
print_r( var_export($a == $b, true) ); // true
return $a == $b; // true

#

$a = new stdClass();
$a->something = 123;
$a->sthg = true;
$b = new stdClass(); // different instance, same class
$b->something = '123';  // same values and type
$b->sthg = 1;
print_r( var_export($a == $b, true) ); // true
print_r( var_export(serialize($a) == serialize($b), true) ); // false
return $a == $b; // true

那么 有没有一个方法:
既可以比较对象的值 又 比较对象的类型和对象的值(不引入隐式转换)，且并不在乎是否指向同一块内存(不引入变量地址检查)

===>
https://github.com/eloquent/equality
