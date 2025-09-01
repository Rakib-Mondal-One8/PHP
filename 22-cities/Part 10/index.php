<?php


require __DIR__.'/inc/all.inc.php';



$worldCityRepository = new WorldCityRepository($pdo);

$count = $worldCityRepository->count();
$pageNo = (int) ($_GET['page'] ?? 1);
$perPage = 15;

if (($pageNo*$perPage) > $count || $pageNo <= 0){
    header('Location: index.php?page=1');
    die();
}


$entries = $worldCityRepository->paginate($pageNo,$perPage);


render('index.view',[
    'entries' => $entries,
    'pagination' => [
        'count' => $count,
        'perPage' => $perPage,
        'page' => $pageNo
    ]
]);