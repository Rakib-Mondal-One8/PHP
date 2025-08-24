<?php

function f(){
    var_dump('Hello');
    return;
}

$value = null;
var_dump($value);

var_dump(f());


// var_dump(isset($value));
// var_dump(empty($value));

$article = [
    'title' => 'Important news!',
    'content' => null
];

var_dump($article);