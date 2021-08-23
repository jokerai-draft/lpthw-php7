<?php declare(strict_types=1);

class TennisRacket extends Racket
{
    public static $counter = 0;

    public function __construct($brand = "(default)", $colour="(default)", $type="(default)", $weight="(default)") {
        if ($colour === "(default)") { $colour = "(default tennis racket colour)"; } // 预处理参数
        parent::__construct($brand, $colour, $type, $weight);
    }

    public static function createFromBrand($brand) {
        return parent::createFromBrand($brand . " of TennisRacket");
    }

    public function __toString() {
        return "TennisRacket ($this->type)";
    }
}
