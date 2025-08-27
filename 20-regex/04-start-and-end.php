<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';

var_dump(preg_match('/^\d/',$message,$match));

var_dump(preg_match('/^\d+\.\d+$/','1234.56',$match));
var_dump($match);

var_dump(preg_match('/^.+@.+\..+$/','rakibone8@gmail.com',$match));
var_dump($match);