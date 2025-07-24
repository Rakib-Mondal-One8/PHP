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
        var_dump($_POST);
        ?></pre>

    <form action="form.php" method="POST" ">
        <input type="text" name="username" value="<?php if(!empty($_POST['username']))echo $_POST['username']; ?>" />
        <input type="password" name="password" value="<?php if(!empty($_POST['password']))echo $_POST['password']; ?>"/>
        <input type="submit" value="Login!"/>
    </form>

</body>
</html>
