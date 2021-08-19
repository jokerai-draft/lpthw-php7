<?php

class Square extends Shape
{
    public $side;
    public $diagonal;

    public function __construct($length) {
        $this->side = $length;
        $this->perimeter = $this->side * 4;
        $this->area = pow($this->side, 2);
        $this->diagonal = round(sqrt(2) * $this->side, 2);
    }

}
