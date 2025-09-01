<?php 
use Admin\User;
use Client\User as Client;

require __DIR__."/src/admin/User.php";
require __DIR__."/src/admin/Role.php";
require __DIR__."/src/client/User.php";

$admin = new User();
$client = new Client();

var_dump($admin);
var_dump($client);