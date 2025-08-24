<?php

header('Content-Type: text/plain');

function f($str)
{
    echo "{$str}\n";
    echo "{$str}\n";
    echo "{$str}\n";
    echo "{$str}\n";
}

$str = 'Hello from PHP!';

f($str);

echo "----------------\n";

$message = "Hello from Mars";
f($message);


echo "----------------\n";

f($str);

$str = 'Hello from PHP Again!';

echo "----------------\n";

f($str);