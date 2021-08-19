<?php

// 去掉一些字符串, 返回新字符串

// abc12def21ghi331jkl341mn => abcdefghijklmn

$str = "abc12def21ghi331jkl341mn";

$pattern = "/[^a-zA-Z]/"; // 即 /[^a-zA-Z]/g
$str2 = preg_replace($pattern, "", $str);
echo $str2;
echo "\n";
echo $str; // unchanged

// 参考 https://tutorials.supunkavinda.blog/php/oop-static-methods-properties

// 说明
// preg_replace(): Unknown modifier 'g'
// g is implicit with preg_replace(). You don't need to include it.
// https://stackoverflow.com/questions/19061037/warning-preg-replace-unknown-modifier-g

// preg_replace() 默认就是替换所有符号匹配条件的元素
// https://www.cnblogs.com/52php/p/5672432.html
