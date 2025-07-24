<?php

$name = "Rajesh";

/*
if($name === "Rakib") echo "The name is Rakib \n";
else echo "The name is not Rakib \n";
*/

$text =  ($name === "Rakib" ? "Name is Rakib \n" :   "Name is Not Rakib \n");
echo $text;

$array = [
    'ABC',
    ($name === "Rakib" ? "Name is Rakib \n" :   "Name is Not Rakib \n")
];
var_dump($array);