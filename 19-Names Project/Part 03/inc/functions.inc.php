<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * This function will generate all the letters of the alphabet as 
 * an array: 
 * ['A', 'B', 'C', ... , 'X', 'Y', 'Z']
 */
function gen_alphabet()
{
    $A = ord('A');
    $Z = ord('Z');

    $letters = [];
    for ($x = $A; $x <= $Z; $x++) {
        $letters[] = chr($x);
    }
    return $letters;
}

function fetch_names_by_initial($char){
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