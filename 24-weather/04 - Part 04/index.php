<?php

use App\Weather\FakeWeatherFetcher;
use App\Weather\RandomWeatherFetcher;
use App\Weather\RemoteWeatherFetcher;

require __DIR__.'/inc/all.inc.php';

$fetcher = new RemoteWeatherFetcher();
$info = $fetcher->fetch('Kolkata');

if($info === null){
    echo "Weather could not be fetched!\n";
    die();
}
require  __DIR__.'/views/index.view.php';