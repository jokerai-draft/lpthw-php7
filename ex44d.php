<?php

class Extendee
{
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
