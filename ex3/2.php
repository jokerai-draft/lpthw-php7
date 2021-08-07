<?php

// 数字

$list1 = [1,2,3,4,5]; // 等价于 $list1 = range(1,5);

$list2 = array_map(fn($item) => $item * 2, $list1);

$list3 = array_map(function($item){ return $item * 2;}, range(11,15));

print_r($list1);
print_r($list2);
print_r($list3);

// 参考
// https://www.php.net/manual/zh/function.array-map.php
// https://stackoverflow.com/questions/3432257/difference-between-array-map-array-walk-and-array-filter

// array_map 本身是函数式，和 C# 的 .ForEach(callback) 是一脉相承的
// 处理各项 (关注的是获得处理结果，而非原值是否改变)
// https://docs.microsoft.com/en-us/dotnet/api/system.collections.generic.list-1.foreach?view=net-5.0
// https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach

// 参考
// 键头函数
// https://stitcher.io/blog/short-closures-in-php
// 如何写 arrow function
// https://stackoverflow.com/questions/4260086/php-how-to-use-array-filter-to-filter-array-keys
// php 箭头函数不能用于打印 echo 、不用加 if 语句



print_r(square([10,20,30,40,50]));
// Returns an array with each element squared - new syntax
function square($arr) {
    return array_map(fn($x) => $x**2, $arr);
}
// https://stackoverflow.com/questions/56657135/how-to-use-arrow-functions-in-php

