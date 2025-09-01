<?php
/*
var_dump(ord('A'));

echo "&#65;";
*/

var_dump(mb_chr(127462));
var_dump(mb_chr(127482) . mb_chr(127480));

function get_flag_for_country(string $iso2): string{
    $iso2 = strtolower($iso2);
    if(strlen($iso2)!==2){
        return $iso2;
    } 

    $first = (mb_chr(127462 + (ord($iso2[0])-ord('a'))));
    $second = (mb_chr(127462 + (ord($iso2[1]) - ord('a'))));

    return $first.$second;
}

$flag = get_flag_for_country('us');
var_dump($flag);

var_dump(get_flag_for_country('u'));

die();

require __DIR__.'/inc/all.inc.php';


$worldCityRepository = new WorldCityRepository($pdo);
$entries = $worldCityRepository->fetch();

render('index.view',[
    'entries' => $entries
]);