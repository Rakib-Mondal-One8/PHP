<?php

function e($value){
    return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}
function render($view,$params){
    /*
    foreach($params as $key => $value){
        ${$key} = $value;
    }
    */
    extract($params);

    ob_start();
    require __DIR__ .'/views/pages/'.$view.'.php';
    $contents = ob_get_clean();

    require __DIR__. '/views/layout/main.view.php';
}

$name = 'Lauren';

//$var = 'name';
//var_dump(${$var});

render("index.view",[
    'name' => $name,
    'sum' => 4895392
]); 