<?php 

header('Content-Type: text/plain');

function add_five($num){
    return $num+5;
}

$result = add_five(5) + 2;
var_dump($result);

var_dump(add_five(add_five(5)));


function fetch_news($id){
    return [
        'id' => $id,
        'title' => 'The title of the news',
        'content' => 'The content of the news'
    ];
}

$a = fetch_news(18);

var_dump($a['title']);

var_dump(fetch_news(123)['content']);