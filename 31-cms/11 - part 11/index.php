<?php

use App\Admin\Controller\LoginController;
use App\Admin\Controller\PagesAdminController;
use App\Admin\Support\AuthService;
use App\Frontend\Controller\NotFoundController;
use App\Frontend\Controller\PagesController;
use App\Repository\PagesRepository;
use App\Support\Container;
use App\Support\CsrfHelper;

/*------------------------------------------------------------------------------------- */

require __DIR__ . '/inc/all.inc.php';

$container = new Container();
$container->bind(
    'pdo', 
    function () {
        return require __DIR__ . '/inc/db-connect.inc.php';
    }
); 

$container->bind('authService', function () use ($container) {
    $pdo = $container->get('pdo');
    return new AuthService($pdo);
});

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
        $authService = $container->get('authService');
        return new PagesAdminController($authService,$pagesRepository);
    }
);

$container->bind('loginController', function () use ($container) {
    $authService = $container->get('authService');
    return new LoginController($authService);
});

$container->bind('csrfHelper',function(){
    return new CsrfHelper();
});

$csrfHelper = $container->get('csrfHelper');
$csrfHelper->handle();

// var_dump($csrfHelper->generateToken());

function csrf_token(){
    global $container;
    $csrfHelper = $container->get('csrfHelper');
    return $csrfHelper->generateToken();
}

$route = @(string) ($_GET['route'] ?? 'pages');

if ($route === 'pages') {

    $page = @(string) ($_GET['page'] ?? 'index');

    $pagesController = $container->get('pagesController');
    $pagesController->showPage($page);
} else if ($route === 'admin/login') {
    $loginController = $container->get('loginController');
    $loginController->login();
} 
else if ($route === 'admin/logout') {
    $loginController = $container->get('loginController');
    $loginController->logout();
} else if ($route === 'admin/pages') {

    $authService = $container->get('authService');
    $authService->ensureLoggedIn();

    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->index();
} else if ($route === 'admin/pages/create') {

    $authService = $container->get('authService');
    $authService->ensureLoggedIn();

    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->create();
} else if ($route === 'admin/pages/delete') {

    $authService = $container->get('authService');
    $authService->ensureLoggedIn();

    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->delete();
} else if ($route === 'admin/pages/edit') {
    $authService = $container->get('authService');
    $authService->ensureLoggedIn();

    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->edit();
} else {
    $notFoundController = $container->get('notFoundController');
    $notFoundController->error404();
}
