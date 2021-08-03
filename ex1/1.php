<?php

class Animal { public $var; }
$a = new Animal;
$a->var = 5;
// var_export($a);
print_r($a);
// echo($a);

$person = new stdClass;
$person->name = 'ElePHPant ElePHPantsdotter';
$person->website = 'https://php.net/elephpant.php';

// var_export($person);
print_r($person);
