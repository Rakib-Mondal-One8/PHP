<?php

class Demo{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }   

    function __destruct()
    {
        echo "Object Destroyed!! <br>";
    }

    function __toString()
    {
        return "Object Name: ". $this->name;
    }
}

$obj = new Demo('Rakib');
echo $obj;
echo "Bang Bhosda!!";
