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
    var_dump(!true);
    var_dump(!false);

    $num = 5;
    var_dump($num !==5);
    var_dump(!($num === 5));

    echo "---------------\n";

    var_dump(true && true);
    var_dump(false && true);
    var_dump(true && false);
    var_dump(false && false);
    /*
    $views = 50000;
    if($views >= 10000 && $views <= 50000){
        echo 'This is a medium performing video';
    }
*/
echo "---------------\n";

    var_dump(true || true);
    var_dump(false || true);
    var_dump(true || false);
    var_dump(false || false);


  echo "---------------\n";

    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);

?></pre>
</body>
</html>