
<?php

class Car
{
    public $brand;
    public $color;

    function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    function showDetails()
    {
        echo "Car: " . $this->brand . " | Color: " . $this->brand;
    }
}

$car1 = new Car('BMW', 'Black');
$car1->showDetails();
?>
