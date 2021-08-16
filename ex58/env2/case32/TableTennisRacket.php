<?php declare(strict_types=1);

class TableTennisRacket extends Racket
{
    public static $counter = 0;

    public static function fromBrand($brand) {
        return parent::fromBrand($brand . " of TableTennisRacket");
    }

    public function __toString() {
        return "TableTennisRacket ($this->type)";
    }
}
