<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


$pdo = new PDO('mysql:host=localhost;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // 3 => 2
]);


$stmt = $pdo->prepare("UPDATE `notes` SET `title` = :title, `content` = :content WHERE `notes`.`id` = :id");
$stmt->bindValue('id',28);
$stmt->bindValue('content','CONTENT (from PHP)');
$stmt->bindValue('title','TITLE (from PHP)');

$stmt->execute();


$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
$stmt2->bindValue('id',28);
$stmt2->execute();

$title = 'A title.....';
$stmt3 = $pdo->prepare('DELETE FROM `notes` WHERE `title` = :title');
$stmt3->bindValue('title',$title);
$stmt3->execute();