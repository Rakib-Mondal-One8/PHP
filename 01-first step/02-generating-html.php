<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .body-1 {
            background-color: darkolivegreen;
            color: aquamarine;
        }
        .body-2 {
            background-color: yellowgreen;
            color: aquamarine;
        }
        .body-3 {
            background-color: cadetblue;
            color: aquamarine;
        }
        .body-4 {
            background-color: darkred;
            color: aquamarine;
        }
        .body-5 {
            background-color: azure;
            color: aquamarine;
        }
        .body-6 {
            background-color: yellow;
            color: aquamarine;
        }
    </style>
</head>
<body class="body-<?php echo rand(1,6); ?>">
    <?php echo "<h1>Hello World!</h1>"; ?>
</body>
</html>
