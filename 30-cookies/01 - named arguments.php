<?php

header('Content-Type: text/plain');

function print_5x($str = 'Hello World',$times = 5){
    for($i = 0 ;$i<$times;$i++){
        var_dump($str);
    }
}

// print_5x();
// print_5x('hello Mars');
// print_5x(10); Always countering the first parameter

// print_5x('Hello Mars',3);
// print_5x(times: 4);
print_5x(times:4, str: 'Hello Rakib');