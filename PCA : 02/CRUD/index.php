<?php

include "../DBMS/db_connection.php";

if (isset($_POST['Add'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];


    $conn->query("INSERT INTO students (id,name,roll_no,ph_no) VALUES ('$id','$name','$rollno',83240)");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $conn->query("DELETE FROM students WHERE id = $id");
}

$res = $conn->query('SELECT * FROM students');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP MySQL CRUD</title>
</head>

<body>
    <h2>Add Student Info</h2>
    <form action="index.php" method="POST">
        ID: <input type="number" name='id' required><br>
        Name: <input type="text" name='name' required><br>
        RollNo: <input type="number" name='rollno' required><br>

        <input type="submit" name="Add" value="Add Student">
    </form>

    <h2>All Students</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
        </tr>

        <?php while ($row = $res->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roll_no']; ?></td>

                <td><a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>