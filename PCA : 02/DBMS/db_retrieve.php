<?php

include "db_connection.php";

$sql = "SELECT * FROM students";

$res = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ID </th>
            <th> Name </th>
            <th> Roll No </th>
        </tr>

        <?php while ($row = $res->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['roll_no'];?></td>
            </tr>

        <?php endwhile; ?>
        ?>
    </table>
</body>

</html>