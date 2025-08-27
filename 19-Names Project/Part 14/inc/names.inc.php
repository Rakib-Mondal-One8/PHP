<?php

declare(strict_types=1);

function fetch_names_by_initial(string $char, int $page = 1, int $perPage = 15): array
{
    global $pdo;

    // Making sure that page is never 0 or even negative
    $page = max(1,$page);

    $stmt = $pdo->prepare("SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr ORDER BY `name` ASC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':expr', $char . '%');
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', ($perPage * ($page - 1)), PDO::PARAM_INT);
    $stmt->execute();

    $data = [];
    while (($arr = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
        $data[] = $arr['name'];
    }
    return $data;
}

function count_names_by_initial(string $char){
    global $pdo;

    $stmt = $pdo->prepare("SELECT COUNT(DISTINCT `name`) AS `count` FROM `names` WHERE `name` LIKE :expr");
    $stmt->bindValue(':expr',$char.'%');
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC)['count'];
}

function fetch_name_entries(string $name): array
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM `names` WHERE `name` LIKE :name");
    $stmt->bindValue(':name', $name);
    $stmt->execute();

    $data = [];
    while (($arr = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
        $data[] = $arr;
    }
    return $data;
}

function gen_name_overview(): array
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT `name`,SUM(`count`) AS `sum` FROM `names` GROUP BY `name` ORDER BY `sum` DESC LIMIT 10");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
