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

    $categories = ['Programming','Business','German','Physics','c++'];
    var_dump($categories);

    var_dump(count($categories));
    if(in_array("c++",$categories)){
        echo "C++ is a catagory on our system \n";
    }

//    var_dump($categories[99]);
//    var_dump(isset($categories[99]));
//    var_dump(empty($categories[99]));
?></pre>
</body>
</html>
