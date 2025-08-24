<?php

header('Content-Type: text/plain');

function print_5x(string $message)
{
    for ($i = 1; $i <= 5; $i++) {
        echo "{$message}\n";
    }
}


print_5x('Hello');

function sum_prices(array $prices)
{
    $sum = 0;
    foreach ($prices as $price) {
        $sum += $price;
    }
    return $sum;
}

sum_prices([1, 2, 3, 4]);
// sum_prices("Error");