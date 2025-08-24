<?php

header('Content-Type: text/plain');

function add_five(int $num){
    var_dump($num);
    return $num + 5;
}



$id = $_GET['id'] ?? 0;
var_dump($id);
var_dump(add_five($id));