<?php

$str = "3";
$str = "edu 1 ex";
$rule = "/\b1\b|\b2\b|\b3\b/"; # 简写为 $rule = "/\b[123]\b/";
$rule = "/\b[123]\b/";
if (preg_match($rule, $str)) { echo "bingo"; }

/*
OK
"3"
"3 "
" 3"
" 3 "
"edu 1 ex"

NOT OK
"32"
"edu 31 ex"
"edu 12 ex"


*/
