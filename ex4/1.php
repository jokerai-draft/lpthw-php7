<?php

// get type of a variable (non-object, or object of some class)

$a = 4;
$b = 4.0;
$c = "hello";

print_r("= 1 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = "h";
$b = 'h';
$c = (5 >= -2);

print_r("= 2 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = false;
$b = 1;
$c = true;

print_r("= 3 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");

$a = pi();
print_r("= 4 =". "\n");
print_r(gettype($a) . "\n");
print_r($a . "\n");

// https://www.w3schools.com/php/php_datatypes.asp
// https://www.php.net/manual/en/language.oop5.basic.php

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
    public function __toString()
    {
        return "a $this->color $this->model car";
    }
}

$myCar = new Car("black", "Volvo");
print_r($myCar->message() . "\n");

print_r(gettype($myCar) . "\n");
print_r($myCar);
print_r($myCar . "\n");
echo($myCar . "\n");

print_r("= 5 =". "\n");
print_r(gettype($myCar) . "\n");
print_r(get_class($myCar) . "\n");
print_r(Car::class . "\n");


$a = 12;
$b = 12.1;
$c = "12";
$d = "0.21";
$e = $b + 3;
$f = $d + 0.21;
$g = $c + 12;

print_r("= 6 =". "\n");
print_r(gettype($a) . "\n");
print_r(gettype($b) . "\n");
print_r(gettype($c) . "\n");
print_r(gettype($d) . "\n");
print_r(gettype($e) . "\n");
print_r(gettype($f) . ' '. $f ."\n");
print_r(gettype($g) . ' '. $g . "\n");
