<?php

include "db_connection.php";

$res = $conn->query('DELETE FROM students WHERE id = 11');

if ($res === TRUE) {
    echo "Record deleted successfully!";
} else {
    echo "Error: ". "<br>" . $conn->error;
}
