<?php

header('Content-Type: text/plain');

// $time = microtime(true);

$password = password_hash('helloworld',PASSWORD_DEFAULT);
echo $password;

echo "\n----\n";
echo password_verify('helloworld',$password);

// echo "\n" . microtime(true) - $time;
