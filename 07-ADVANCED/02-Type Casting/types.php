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
        if(isset($_GET['price'])){
            $price = (int) $_GET['price'];
            var_dump($price);
            var_dump($price*1.19);
        }

        var_dump($_GET);
        if(isset($_GET['name'])){
            $name = @(string) $_GET['name'];
            var_dump($name);
            var_dump($_GET['name'] . '!!!');
        }
    ?></pre>
<a href="types.php?<?php echo http_build_query(['name'=>['Rakib','Observer']]); ?>">Link</a>
</body>
</html>