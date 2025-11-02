<?php

abstract class Shape
{
    abstract public function area();
}

class Circle extends Shape
{
    private $radius;
    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area()
    {
        return $this->length * $this->width;
    }
}


$shapes = [new Circle(4), new Rectangle(2, 5)];

foreach ($shapes as $shape) {
    echo "Area: " . $shape->area() . "<br>";
}
