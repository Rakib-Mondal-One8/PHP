<?php 

require __DIR__."/src/admin/User.php";
require __DIR__."/src/client/User.php";

$admin = new Admin\User();
$client = new Client\User();

var_dump($admin);
var_dump($client);