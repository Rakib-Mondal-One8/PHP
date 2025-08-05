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
    $num = 18;
    $str = 'Rakib Mondal';
    $arr = [1,3,5];

    var_dump($num);
    var_dump($str);

    var_dump(is_bool($num));
    var_dump(is_int($num));
    var_dump(is_float($num));
    var_dump(is_array($arr));
    var_dump( is_string($str));

    $entries = [
            'Title' => 'The most famous band!',
            'A classic concert'
    ];

    foreach($entries as $entry){
        if(is_array($entry))var_dump($entry['Title']);
        else var_dump($entry);
    }
?></pre>
</body>
</html>