<?php

use App\Frontend\Controller\NotFoundController;

require __DIR__ . '/inc/all.inc.php';

$page = @(string) ($_GET['page'] ?? 'index');

if($page === 'index'){
    echo "TODO: Develop the index page!<br /> \n";
}
else{
    $notFoundController = new NotFoundController();
    $notFoundController->error404();
}