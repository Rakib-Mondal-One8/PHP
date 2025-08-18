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
        $x = 42;
        echo ($x*2) . " \n";
        echo ($x/2) . " \n";
        echo ($x+2) . " \n";
        echo ($x-2) . " \n";

//        echo '5' + '6a' . "\n";
        echo round(3.33,1) . "\n";
        echo ceil(3.33) . "\n";
        echo floor(3.91) . "\n";

//        $x = $x*2;
        $x*=2;
        $x/=2;
        $x+=2;
        $x-=2;
        echo $x . "\n";
    ?></pre>
</body>
</html>