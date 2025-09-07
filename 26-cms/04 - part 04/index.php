<?php

use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;

require __DIR__ . '/inc/all.inc.php';

$page = @(string) ($_GET['page'] ?? 'index');

if($page === 'index'){
    $pagesController = new PagesController();
    $pagesController->showPage('index');
}
else{
    $notFoundController = new NotFoundController();
    $notFoundController->error404();
}  