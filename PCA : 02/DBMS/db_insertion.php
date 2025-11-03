<?php

include "db_connection.php";

$sql = "INSERT INTO students (name,roll_no,ph_no) VALUES ('Rakib',98,832632903)";

$res = $conn->query($sql);

if ($res === TRUE) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
