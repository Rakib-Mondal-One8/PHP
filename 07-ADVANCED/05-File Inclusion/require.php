<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre><?php

    require_once __DIR__.'/inc/functions.inc.php';
    require_once __DIR__.'/inc/functions.inc.php';
    require_once __DIR__.'/inc/all.inc.php';
    include_once __DIR__.'/inc/functions.inc.php';

    $text  = "PHP is Amazing!";
?></pre>
<h1><?php echo e($text) ?></h1>
</body>
</html>
