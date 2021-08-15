<?php

$str = "3";
$str = "1";
$rule = "/^1$|^2$|^3$/"; # 可以简写为 $rule = "/^[123]$/";
$rule = "/^[123]$/";
if (preg_match($rule, $str)) { echo "bingo"; }

/*
OK
"3"
"1"

NOT OK
"3 "
" 3"
" 3 "
"edu 31 ex"
"edu 1 ex"

NOT OK
"32"
"edu 31 ex"
"edu 12 ex"


*/

