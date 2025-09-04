<?php

header('Content-Type: text/plain');

class Animal
{
    public function __construct(public int $weight) {}
    public function move()
    {
        echo "Animal::move() has been called\n";
    }

    public function eat()
    {
        var_dump($this);
        echo "Animal::eat() has been called ({$this->weight})\n";
    }
}

$animal = new Animal(65);
$animal->eat();

class Dog extends Animal
{
    /*
    public function __construct() {
        // $this->weight = 30;
        parent::__construct(40);
    }
        */

    public function __construct(public string $breed, $weight)
    {
        parent::__construct($weight);
    }
    public function bark()
    {
        echo "Dog::bark() has been called (breed: {$this->breed}, weight: {$this->weight})\n";
    }
    public function move()
    {
        echo "Dog::move() has been called\n";
    }
}

$dog = new Dog('Golden Retriever', 25);
$dog->move();
$dog->bark();
$dog->eat();
