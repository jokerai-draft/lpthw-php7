<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Racket.php');

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
