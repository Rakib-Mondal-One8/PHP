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
    $categories = [
        'Programming','Business','German','Physics','c++'
    ];

    $arr  = [
        1,
        2,
        3
    ];
    var_dump(array_search('Business',$categories));
    var_dump(array_slice($categories,1,2));
    var_dump(min($arr));
    var_dump(max($arr));
    var_dump(array_sum($arr));


    $topic = ['Courses','Books'];
    $topic2 = ['Iron Man','Captain America', 'Thor'];

    $out = array_merge($topic,$topic2);
//    var_dump($out);

    var_dump([...$topic,...$topic2,'Groceries']);
    $arr = [1.1234567 ,5];
    var_dump(round(...$arr));
    echo (round(...$arr));
    ?></pre>
</body>
</html>
