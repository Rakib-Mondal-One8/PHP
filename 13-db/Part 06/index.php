<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


$pdo = new PDO('mysql:host=localhost;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // 3 => 2
]);

/*
$id = (int) $_GET['id'];

$query = "SELECT * FROM `notes` WHERE `id`= {$id} ";
var_dump($query);

$stmt = $pdo->prepare($query);
$stmt->execute();

$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);
*/

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id`= :id');
$stmt->bindValue('id',$_GET['id']);
$stmt->execute();

$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);