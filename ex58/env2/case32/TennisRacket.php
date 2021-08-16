<?php declare(strict_types=1);

if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Racket.php');

class TennisRacket extends Racket
{
    public static $counter = 0;

    public function __construct($brand = "(default)", $colour="(default)", $type="(default)", $weight="(default)") {
        parent::__construct($brand, $colour, $type, $weight);
        $this->colour = "(default tennis racket colour)";
    }

    public static function fromBrand($brand) {
        return parent::fromBrand($brand . " of TennisRacket");
    }

    public function __toString() {
        return "TennisRacket ($this->type)";
    }
}
