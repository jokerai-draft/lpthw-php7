<?php

// php get last element

// benchmark of 10 ways to get the last element of an array
// https://stackoverflow.com/questions/3687358/whats-the-best-way-to-get-the-last-element-of-an-array-without-deleting-it

// 最简单的是 end(arrary_values($arr)) 和 $arr[array_key_last($arr)]
// count 的问题是什么  only be used for auto-indexed arrays

// 如果手动改变 internal 指针，那么可以 $x = end($array); reset($array); return $x;


// PHP's built-in functions were built by extreme nerds. Do not try to recreate those functions. The odds are that you make something far slower than the original. Unless you are some sort of evil wizard, of couse.

// https://stackoverflow.com/questions/2348205/how-to-get-last-key-in-an-array

