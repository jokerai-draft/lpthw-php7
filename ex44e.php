<?php

class Extendee
{
    public function __construct() { }
    public function implicit() {
        echo "PARENT implicit()" . "\n";
    }
    public function override() {
        echo "PARENT override()" . "\n";
    }
    public function altered() {
        echo "PARENT altered()" . "\n";
    }
}

class Extender extends Extendee
{
    public $staff;
    public function __construct($staff = "") {
        parent::__construct();
        $this->staff = $staff;
    }
    public function override() {
        echo "CHILD override()" . "\n";
    }
    public function altered() {
        echo "CHILD, BEFORE PARENT altered()" . "\n";
        parent::altered();
        echo "CHILD, AFTER PARENT altered()" . "\n";
    }
}

function test1(){
    $dad = new Extendee();
    $son = new Extender();
    // $dad->implicit();
    // $son->implicit();
    // $dad->override();
    // $son->override();

    $dad->altered();
    $son->altered();
}
test1();


// 参考 何时调用 parent::__construct();
// https://stackoverflow.com/questions/39748226/must-i-call-parent-construct-in-the-first-line-of-the-constructor
// https://stackoverflow.com/questions/1557608/how-do-i-get-a-php-class-constructor-to-call-its-parents-parents-constructor
