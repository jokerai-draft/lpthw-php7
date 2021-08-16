<?php declare(strict_types=1);

class TennisRacket extends Racket
{
    public static $counter = 0;

    public static function fromBrand($brand) {
        return parent::fromBrand($brand . " of TennisRacket");
    }

    public function __toString() {
        return "TennisRacket ($this->type)";
    }
}
