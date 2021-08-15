<?php declare(strict_types=1);

class Racket
{
    public $colour;
    public $weight;
    public $type;
    public $brand;

    public static $counter = 0; // 如果用 public static $counter = 0; 则有传染性

    protected function __construct($brand = "(default)", $colour="(default)", $type="(default)", $weight="(default)") {
        $this->colour = $colour;
        $this->weight = $weight;
        $this->type   = $type;
        $this->brand  = $brand;

        ++static::$counter; // 各自类的实例 这个等于 安排好了会 yield 到子类实例
        ++self::$counter;   // 总数 (记录各个子类包括本类的 总数)
    }

    public static function fromBrand($brand) {
        return new static($brand, "(default)", "(default)", "(default)");
    }

    public static function fromType($type) {
        return new static("(default)", "(default)", $type, "(default)"); // 这里一定要用 static 否则实例类型错误 [1]
    }

    public function __toString() {
        return "Racket ($this->type)";
    }

    // just like called as parent::__construct(); https://www.php.net/manual/en/language.oop5.late-static-bindings.php#114005
    public static function create() {
        return new static("(default)", "(default)", "(default)", "(default)");
    }
}

// [1]
// https://stackoverflow.com/questions/20886911/php-self-vs-parent-with-extends
