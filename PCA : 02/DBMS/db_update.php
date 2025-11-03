<?php

include 'db_connection.php';

$sql = "UPDATE students SET name='Tornov' WHERE id = 4";

$res = $conn->query($sql);

if ($res === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
