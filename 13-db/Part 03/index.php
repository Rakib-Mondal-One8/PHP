<?php

    $pdo = new PDO('mysql:host=localhost;dbname=note_app','root','',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            // 3 => 2
        ]);

    $stmt = $pdo->prepare("SELECT * FROM `notes`");
    $stmt->execute();

    var_dump($stmt);
    
    $result = $stmt->fetchAll();
    var_dump($result);
?>