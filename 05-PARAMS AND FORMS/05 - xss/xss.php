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
//    var_dump($_POST);
    function e($value){
        return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
    }
    ?></pre>

<h1><?php if(!empty($_POST['firstname'])) echo e($_POST['firstname']); ?></h1>

<form action="xss.php" method="POST">
    <input type="text" name="firstname" value="<?php if(!empty($_POST['firstname']))echo e($_POST['firstname']); ?>" />
    <input type="submit" value="Submit!" />
</form>
</body>
</html>
