<?php

include "db_connection.php";

$stmt = $conn->prepare("INSERT INTO `students` (name,roll_no,ph_no) VALUES (?,?,?)");
$stmt->bind_param('sii', $name,$roll,$ph_no);

$name = 'Sayak Chudu';
$roll = 3928;
$ph_no = 4837;

$stmt->execute();


$conn->close();
