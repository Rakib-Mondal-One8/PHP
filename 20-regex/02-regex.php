<?php

header('Content-Type: text/plain');

$message = 'Happy 30th 20 50 Birthday! Best wishes php@example.com';

$findings = null;
var_dump(preg_match('/\d\d/',$message,$findings)); //only digit
var_dump($findings);

/*
var_dump(preg_match_all('/\d\d/', $message, $findings));
var_dump($findings);
*/

var_dump(preg_match('/\D\D/', $message, $findings)); // characters except digit
var_dump($findings);

var_dump(preg_match('/\w/', $message, $findings)); // characters and digits but not space
var_dump($findings);


var_dump(preg_match('/\d\d\w\w/', $message, $findings));
var_dump($findings);

var_dump(preg_match('/\d\dth/',$message,$findings));
var_dump($findings);