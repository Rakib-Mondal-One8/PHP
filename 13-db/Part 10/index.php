<?php

// phpinfo();

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

try{
    $pdo = new PDO('mysql:host=localhost;dbname=note_app;charset=utf8mb4', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // 3 => 2
    ]);
}
catch(PDOException $e){
    echo "❌ Connection failed: " . $e->getMessage();
    die();
}

$stmt = $pdo->prepare('INSERT INTO `notes` (`title`,`content`) VALUES(:title,:content)');
$stmt->bindValue('title', '🌏');
$stmt->bindValue('content', '🌏');

$stmt->execute();