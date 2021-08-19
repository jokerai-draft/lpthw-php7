<?php

class Circle extends Shape
{
    public $radius;
    public $circumference;
    public $diameter;

    public function __construct($radius) {
        $this->radius = $radius;
        $this->diameter = $this->radius * 2;
        $this->perimeter = round(M_PI * 2 * $this->radius, 2);
        $this->area = round(M_PI * (pow($this->radius, 2)), 2);
        $this->circumference = $this->perimeter; // Define a circumference, since it's the more familiar term.
    }

}
