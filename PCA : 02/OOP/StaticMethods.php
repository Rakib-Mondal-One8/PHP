<?php

class Counter{
    public static $count = 0;

    static function increment(){
        self::$count++;
    }
}

echo Counter::$count . '<br>';
Counter::increment();
echo Counter::$count;