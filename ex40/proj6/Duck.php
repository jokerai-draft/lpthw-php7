<?php

class Duck implements ISleepable
{
    use Quack;
    // use IntensiveSleep;
    use SuperficialSleep;

    public $name;
    public function __construct() {

    }
}
