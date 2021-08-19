<?php

// 去掉一些字符串, 返回新字符串

// abc12 def21g hi331jkl34 1mn => abcdefghijklmn

$str = "   abc12 def21g hi3 31jkl34 1mn  ";

$pattern = "/[^a-zA-Z]/";
$str2 = preg_replace($pattern, "", $str);
echo $str2;
echo "\n";
echo $str; // unchanged

