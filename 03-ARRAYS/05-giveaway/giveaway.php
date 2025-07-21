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
        'Tornov Dutta',
        'Ritam Mondal',
        'Raju Thakur'
    ];
    /*
    $num = count($names);
    $choice = rand(0,$num-1);
    echo $names[$choice];
    */
    echo "The Winner is {$names[rand(0,count($names)-1)]}";
?></pre>
</body>
</html>
