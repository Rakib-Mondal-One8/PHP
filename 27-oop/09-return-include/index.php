<?php

header('Container-Type: text/plain');

$value = require 'other-file.php';
var_dump($value);