<?php

$str = "13";
$str = "11";
$rule = "/^11$|^12$|^13$/";
if (preg_match($rule, $str)) { echo "bingo"; }

/*
OK
"13"
"11"

NOT OK
"1"
"11 "
"13 "
" 13"
" 13 "
"edu 31 ex"
"edu 13 ex"

NOT OK
"32"
"edu 1 ex"
"edu 12 ex"


*/

