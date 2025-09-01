<?php

/*

function autoload($class){
    var_dump($class);
    if($class === 'Admin\\User'){
        require __DIR__ ."/src/admin/User.php";
        return;
    }
    if ($class === 'Admin\\Role') {
        require __DIR__ . "/src/admin/Role.php";
        return;
    }
    if ($class === 'Client\\User') {
        require __DIR__ . "/src/client/User.php";
        return;
    }
}
*/
/*
function autoload($class)
{
    var_dump($class);
    $filepath = __DIR__ . "/src/" . str_replace('\\', '/', $class) . ".php";
    if (file_exists($filepath)) {
        require $filepath;
    }
}

spl_autoload_register('autoload');
*/

/*
$print = function(){
    var_dump("HELLO WORLD");
};
*/

spl_autoload_register(function ($class){
    $filepath = __DIR__ . "/src/" . str_replace('\\', '/', $class) . ".php";
    if (file_exists($filepath)) {
        require $filepath;
    }
});


$admin = new Admin\User();
$client = new Client\User();
