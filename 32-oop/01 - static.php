<?php

header('Content-Type: text/plain');

class Car
{

    public static string $brand = 'Tesla';
    public static function drive()
    {
        $brand = self::$brand;
        var_dump("Car::drive has been called, {$brand}");
    }
}

/*
$car = new Car();
$car->drive();
*/

Car::drive();
var_dump(Car::$brand);
