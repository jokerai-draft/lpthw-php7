<?php declare(strict_types=1);

class TableTennisRacket
{
    public $colour;
    public $weight;
    public $type;
    public $brand;

    public static $counter = 0;

    public function __construct($brand = "(default)", $colour="(default)", $type="(default)", $weight="(default)") {
        $this->colour = $colour;
        $this->weight = $weight;
        $this->type   = $type;
        $this->brand  = $brand;

        ++static::$counter; // 各自类的实例 这个等于 安排好了会 yield 到子类实例       // <-- 如果自视为 具体干活儿的, 且无父类在支配
        // ++self::$counter;   // 总数 (记录各个子类包括本类的 总数)      // <-- 如果自视为 可能是父类, 且提前准备(有意识到)给 late static binding 留下空间
    }

    public static function fromBrand($brand) {
        return new static($brand, "(default)", "(default)", "(default)");
    }

    public static function fromType($type) {
        return new static("(default)", "(default)", $type, "(default)");
    }

    public function __toString() {
        return "TableTennisRacket ($this->type)";
    }
}

// 参考
// https://www.php.net/manual/zh/language.oop5.decon.php#language.oop5.decon.constructor.static

// 这里用了 late binding 的语法, 虽然没体现效果, 但是值得的
// https://stackoverflow.com/questions/20886911/php-self-vs-parent-with-extends#comment31347314_20887205
