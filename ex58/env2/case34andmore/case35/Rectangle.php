<?php

class Rectangle extends Shape
{
    public $length;
    public $width;
    public $diagonal;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width  = $width;
        $this->area = $this->length * $this->width;
        $this->perimeter = $this->length * 2 + $this->width * 2;
        $this->diagonal = round(sqrt(pow($this->length, 2) + pow($this->width, 2)), 2);
    }

    public function isSquare () {
        return $this->length === $this->width;
    }

}
