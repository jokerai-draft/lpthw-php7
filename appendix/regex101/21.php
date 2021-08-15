<?php

$str = "yes";
$str = "k yes";
$rule = "/\by\b|\byes\b/"; # 从一句子检索出是否有 "y" 或 "yes" 单词
$rule = "/\by\b|\byes\b|\bY\b|\bYES\b/";
if (preg_match($rule, $str)) { echo "bingo"; }

/*
OK
"x y z"
"no or yes"
"yes"
"k yes"

NOT OK
"no or "
"yyes"
"kyes"
"k yes2"
"y12"
*/

// 参考
// https://segmentfault.com/a/1190000013075245 单词边界
