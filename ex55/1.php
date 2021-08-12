<?php

// about serialize

// 1

$a = new stdClass();
$a->something = 123;
$a->sthg = true;
$b = new stdClass(); // different instance, same class
$b->something = '123';  // same values and type
$b->sthg = 1;
print_r( var_export($a == $b, true) ); // true
print_r( var_export(serialize($a) == serialize($b), true) ); // false
return $a == $b; // true

