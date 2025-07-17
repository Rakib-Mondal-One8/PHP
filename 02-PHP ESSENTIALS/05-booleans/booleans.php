<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="simple.css">
</head>
<body>
<pre><?php
    var_dump(true);
    var_dump(false);

    $value = true;
    var_dump($value);

    echo "--------------------\n";

    $meaning = 18;
    var_dump($meaning > 10);
    var_dump($meaning <10);

    echo "--------------------\n";

    $name = "Rakib";
    var_dump($name === "Rakib");

    echo "--------------------\n";

    $x = 30;
    var_dump ($x === 30);
    var_dump($x ==='30');
?></pre>
</body>
</html>