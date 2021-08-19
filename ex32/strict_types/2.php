<?php declare(strict_types=1);

$a = ['a' => 'x', '42' => 'y'];

function foo($k, $v) {
    echo "{$k}={$v}\n";
}

foreach ($a as $k => $v) {
    foo($k, $v);
}
