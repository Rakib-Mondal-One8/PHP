<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
if (strlen($char) > 1) $char = $char[0];
$char = strtoupper($char);

if (strlen($char) === 0) {
    header('Location: index.php');
    die();
}

$page = (int)($_GET['page'] ?? 1);
$perPage = 15;

$data = fetch_names_by_initial($char, $page,$perPage);
$name_count = count_names_by_initial($char);

render('char.view', [
    'data' => $data,
    'char' => $char,
    'pagination' => [
        'page' => $page,
        'count' => $name_count,
        'perPage' => $perPage
    ]
]);
