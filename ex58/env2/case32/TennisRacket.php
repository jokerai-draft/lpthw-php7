<?php declare(strict_types=1);

class TennisRacket extends Racket
{
    public static $counter = 0;

    public static function createFromBrand($brand) {
        return parent::createFromBrand($brand . " of TennisRacket");
    }

    public function __toString() {
        return "TennisRacket ($this->type)";
    }
}
