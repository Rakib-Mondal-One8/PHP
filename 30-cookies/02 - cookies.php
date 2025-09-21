<?php

header('Content-Type: text/plain');

setcookie('str', 'Hello World');

var_dump($_COOKIE);