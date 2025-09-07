<?php

use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;
use App\Repository\PagesRepository;

require __DIR__ . '/inc/all.inc.php';

$page = @(string) ($_GET['page'] ?? 'index');

if($page === 'index'){

    $pagesRepository = new PagesRepository($pdo);

    $pagesController = new PagesController($pagesRepository);
    $pagesController->showPage('index');
} 
else{
    $notFoundController = new NotFoundController();
    $notFoundController->error404();
}  