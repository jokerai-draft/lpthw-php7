<?php declare(strict_types=1);

class TableTennisRacket extends Racket
{
    public static $counter = 0;

    // 任何值都传不进去
    // public function __construct() {
    //     parent::__construct(); // extendee constructor being "protected"
    // }
    public function __construct($brand = "(default)", $colour="(default)", $type="(default)", $weight="(default)") {
        parent::__construct($brand, $colour, $type, $weight);
    }

    public static function fromBrand($brand) {
        return parent::fromBrand($brand . " of TableTennisRacket");
    }

    public function __toString() {
        return "TableTennisRacket ($this->type)";
    }
}
