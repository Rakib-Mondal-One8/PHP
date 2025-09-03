<?php 
declare(strict_types=1);

namespace App\Weather;

// use App\Weather\WeatherFetcherInterface;

class RandomWeatherFetcher implements WeatherFetcherInterface{
    public function fetch(string $city):WeatherInfo{
        $weatherTypes = [
            'sunny',
            'stormy',
            'snowy',
            'cloudy'
        ];
        return new WeatherInfo($city,rand(270,330),$weatherTypes[rand(0,3)]);
    }
}