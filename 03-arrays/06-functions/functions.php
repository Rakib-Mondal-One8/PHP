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
    $names = [
        'Rakib Mondal',
        'Rajesh Mondal',
        'Rohit Majumder',
        'Sayak Chakraborty',
        'Rakib Mondal',
        'Tornov Dutta',
        'Ritam Mondal',
        'Sayak Chakraborty',
        'Rohit Majumder',
        'Raju Thakur'
    ];
//    $names = array_unique($names);
    sort($names);
    var_dump($names);
?></pre>
</body>
</html>