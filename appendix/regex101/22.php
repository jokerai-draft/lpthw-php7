<?php

$str = "yes";
$str = "y";
$rule = "/^y$|^yes$/"; # 校验用户输入 只接受 "yes" 或 "y"
$rule = "/^y$|^yes$|^Y$|^YES$/";
if (preg_match($rule, $str)) { echo "bingo"; }

/*
OK
"y"
"yes"

NOT OK
"y "
"y12"
*/
