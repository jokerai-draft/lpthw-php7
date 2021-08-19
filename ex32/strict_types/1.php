<?php declare(strict_types=1);

$a = ['a' => 'x', '42' => 'y'];

function foo(string $k, string $v):void {
    echo "{$k}={$v}\n";
}

// foreach ($a as $k => $v) {
//     foo($k, $v); // 失败, 因为在 foo signature 的要求之下 第一个参数应该是 string
// }

foreach ($a as $k => $v) {
    foo((string)$k, $v); // OK
}

// https://twitter.com/FredBouchery/status/1410570286337085440
// https://twitter.com/exakat

// https://phpstan.org/r/78d9db49-1684-4149-85e6-391ddde26411

// 这个其实涉及到 array key 原理了(某个机制会自动把 numeric string key 转化为 int key ), 属于历史包袱, 不太可能改变
// https://stackoverflow.com/questions/4100488/a-numeric-string-as-array-key-in-php

// https://segmentfault.com/a/1190000040534406#为什么不用 PHP 做算法题
