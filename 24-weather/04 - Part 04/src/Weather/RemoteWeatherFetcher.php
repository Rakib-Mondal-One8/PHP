<?php 

namespace App\Weather;

class RemoteWeatherFetcher implements WeatherFetcherInterface {
    public function fetch(string $city): ?WeatherInfo
    {
        $ch = curl_init("https://downloads.codingcoursestv.eu/056%20-%20php/weather/weather.php?".http_build_query(['city'=>$city]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        if($response === false)return null;

        $data = json_decode($response, true);

        if(empty($data['city']) || empty($data['temperature']) || empty($data['weather']))return null;
        
        return new WeatherInfo($data['city'], $data['temperature'], $data['weather']);
    }
}