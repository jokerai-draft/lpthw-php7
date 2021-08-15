<?php

class Other
{
    public function implicit() {
        echo "OTHER implicit()" . "\n";
    }
    public function override() {
        echo "OTHER override()" . "\n";
    }
    public function altered() {
        echo "OTHER altered()" . "\n";
    }
}

class Extender
{
    public $other;
    public function __construct() {
        $this->other = new Other();
    }
    public function implicit() {
        $this->other->implicit();
    }
    public function override() {
        echo "CHILD override()" . "\n";
    }
    public function altered() {
        echo "CHILD, BEFORE PARENT altered()" . "\n";
        $this->other->altered();
        echo "CHILD, AFTER PARENT altered()" . "\n";
    }
}

function test2(){
    $son = new Extender();
    $son->implicit();
    $son->override();
    $son->altered();
}
test2();

