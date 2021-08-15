<?php declare(strict_types=1);

class Blueberry
{
    public $taste;

    public function __construct($taste = "(default taste)") {
        $this->taste = $taste;
    }

    public function __toString() {
        return "Blueberry ($this->taste)";
    }
}
