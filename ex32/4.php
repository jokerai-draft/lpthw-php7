<?php

// 一种老旧的数据结构

$arr = ["Monday", "Tuesday", "Wednesday", ];

if (in_array("Wednesday", $arr, true)) {
    echo "bingo \n";
    echo "Wednesday at #" . array_search("Wednesday", $arr);
}

// 参考
// https://code.tutsplus.com/tutorials/working-with-php-arrays-in-the-right-way--cms-28606
// https://code.tutsplus.com/courses/php-fundamentals/lessons/creating-a-dataprovider-class


// 关于 ArrayObject
// ArrayObject 是一个 SPL 对象，它完全模仿数组的用法，但是却是以对象来工作
// https://segmentfault.com/a/1190000014126990
