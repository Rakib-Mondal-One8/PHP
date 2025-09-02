<?php

header('Content-Type: text/plain');

interface Car {
    public function drive();
}

class FuelCar implements Car {
    public function drive(){
        echo 'The car is driving and cosuming fuel';
    }
}

class ElectricCar implements Car{
    public function drive(){
        echo 'The car is driving and consuming electricity';
    }
}

function transport(Car $car){
    $car->drive();
}

$audi = new FuelCar();
transport($audi);

$tesla = new ElectricCar();
transport($tesla);
