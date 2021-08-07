<?php

// php indexed array
// https://www.javatpoint.com/php-indexed-array

// array Type Casting and Overwriting example （ array 键方面的特性：会覆写、可数可字符串、新元素键值默认从当前最大键值递增）（结果是：按键值推测下一个键值 不可推测、map 里混入了 被赋予了默认键值的键值对、）
// https://www.php.net/manual/en/language.types.array.php

// array key
// PHP arrays can contain int and string keys
// It is possible to specify the key only for some elements and leave it out for others
// same key shall be overridden.

// 下一个 array index 是什么
// The key is optional. If it is not specified, PHP will use the increment of the largest previously used int key.
// https://www.php.net/manual/en/language.types.array.php

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);

$array[] = "hello";
var_dump($array);
/*#=>
array(5) {
    ["foo"]=>
    string(3) "bar"
    ["bar"]=>
    string(3) "foo"
    [100]=>
    int(-100)
    [-100]=>
    int(100)
    [101]=>
    string(5) "hello" #
  }
*/
