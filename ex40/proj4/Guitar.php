<?php
// Guitar
// - brand

class Guitar implements IInstrumentPlayable
{
    public $brand;
    public $strings = ["E", "B", "G", "D", "A", "E"];
    public function __construct($brand = "(no brand)") {
        $this->brand = $brand;
    }
    public function testSound () {
        // return "der";
        $r = "";
        foreach ($this->strings as $string) {
            $r .= "($string) der \n";
        }
        unset($string);
        return $r;
    }
}
