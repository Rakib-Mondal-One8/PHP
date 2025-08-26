<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
if (strlen($char) > 1) $char = $char[0];
$char = strtoupper($char);

if (strlen($char) === 0){
    header('Location: index.php');
    die();
}

$data = fetch_names_by_initial($char);

render('char.view',[
    'data' => $data
]);