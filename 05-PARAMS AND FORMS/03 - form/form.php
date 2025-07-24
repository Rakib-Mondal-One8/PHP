<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="simple.css">
    <title>Document</title>
</head>
<body>
    <pre><?php
        var_dump($_GET);
        ?></pre>

    <?php if(!empty($_GET['book'])) : ?>
        <h1><?php echo $_GET['book']; ?></h1>
    <?php endif;?>

    <form action="form.php" method="GET">
        <input type="text" name="book" value="<?php echo (!empty($_GET['book']) ? $_GET['book'] : "No Books are available \n")  ?> "/>
        <input type="submit" value="Submit!">
    </form>

</body>
</html>
