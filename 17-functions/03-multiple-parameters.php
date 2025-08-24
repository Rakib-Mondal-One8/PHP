<?php

header('Content-Type: text/plain');

function f($str='hi', $count=2)
{
    for ($i = 1; $i <= $count; $i++) {
        echo "{$str}\n";
    }
}


f('Hello from PHP!',3);

echo "----------------\n";

f("Hello from Mars",5);


echo "----------------\n";

f('Hello from PHP Again!');


f();