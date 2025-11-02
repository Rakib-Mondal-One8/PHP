<?php

class Animal{
    public function sound(){
        echo "Animal Makes different sound!!";
    }
}

class Dog extends Animal{
    public function sound(){
        echo "Dog barks!!";
    }
}

$dog1 = new Dog();
$dog1->sound();