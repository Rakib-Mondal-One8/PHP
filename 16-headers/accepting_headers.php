<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if(strpos($ua,'Firefox') !==false){
    echo 'You are Using Firefox!!';
}
else{
    echo 'You are using Chrome!';
}

var_dump($ua);

echo '<pre>';
var_dump($_SERVER);
echo '<pre/>';
