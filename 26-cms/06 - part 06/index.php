<?php

use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;
use App\Repository\PagesRepository;

require __DIR__ . '/inc/all.inc.php';

$route = @(string) ($_GET['route'] ?? 'pages');

if($route === 'pages'){

    $page = @(string) ($_GET['page'] ?? 'index');

    $pagesRepository = new PagesRepository($pdo);

    $pagesController = new PagesController($pagesRepository);
    $pagesController->showPage($page);
}
else{
    $notFoundController = new NotFoundController();
    $notFoundController->error404();
}   