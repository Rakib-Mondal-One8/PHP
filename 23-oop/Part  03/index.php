<?php

use Admin\User;
use Client\User as Client;

require __DIR__ . "/src/admin/User.php";
require __DIR__ . "/src/admin/Role.php";
require __DIR__ . "/src/client/User.php";

var_dump(User::class);
var_dump(Client::class);

$admin = new User();

var_dump($admin::class);
var_dump(get_class($admin));

$client = new Client();

var_dump($admin);
var_dump($client);

var_dump($client instanceof Client);
var_dump($client instanceof \Client\User);
var_dump($client instanceof User);