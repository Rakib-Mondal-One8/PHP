<?php

function render($view){
    ob_start();
    require __DIR__ .'/views/pages/'.$view.'.php';
    $contents = ob_get_clean();

    require __DIR__. '/views/layout/main.view.php';
}


render("index.view");