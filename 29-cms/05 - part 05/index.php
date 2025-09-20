<?php

use App\Admin\Controller\PagesAdminController;
use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;
use App\Repository\PagesRepository;
use App\Support\Container;

require __DIR__ . '/inc/all.inc.php';

$container = new Container();
$container->bind(
    'pdo',
    function () {
        return require __DIR__ . '/inc/db-connect.inc.php';
    }
);

$container->bind(
    'pagesRepository',
    function () use ($container) {
        $pdo = $container->get('pdo');
        return new PagesRepository($pdo);
    }
);

$container->bind(
    'pagesController',
    function () use ($container) {
        $pagesRepository = $container->get('pagesRepository');
        return new PagesController($pagesRepository);
    }
);

$container->bind('notFoundController', function () use ($container) {
    $pagesRepository = $container->get('pagesRepository');
    return new NotFoundController($pagesRepository);
});

$container->bind(
    'pagesAdminController',
    function () use ($container) {
        $pagesRepository = $container->get('pagesRepository');
        return new PagesAdminController($pagesRepository);
    }
);

$route = @(string) ($_GET['route'] ?? 'pages');

if ($route === 'pages') {

    $page = @(string) ($_GET['page'] ?? 'index');

    $pagesController = $container->get('pagesController');
    $pagesController->showPage($page);
} else if ($route === 'admin/pages') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->index();
} else if ($route === 'admin/pages/create') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->create();
} else {
    $notFoundController = $container->get('notFoundController');
    $notFoundController->error404();
}
