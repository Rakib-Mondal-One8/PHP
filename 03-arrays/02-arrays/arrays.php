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
    /*
    $category1 = 'Programming';
    $category2 = 'Business';
    $category3 = 'German';
    $category4 = 'Physics';
    $category5 = 'C++';
    */

//    $categories = array('Programming','Business','German','Physics','c++');
    $categories = ['Programming','Business','German','Physics','c++'];
    var_dump($categories);
    var_dump($categories[0]);
    echo $categories[0]."\n";
    echo $categories[3]."\n";

//    $firstCategory = $categories[0];
//    var_dump($firstCategory);

?></pre>

</body>
</html>