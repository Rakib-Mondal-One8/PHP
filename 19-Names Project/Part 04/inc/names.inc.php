<?php

declare(strict_types=1);

function fetch_names_by_initial(string $char): array
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr");
    $stmt->bindValue(':expr', $char . '%');
    $stmt->execute();

    $data = [];
    while (($arr = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
        $data[] = $arr['name'];
    }
    return $data;
}
