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

    $books = [
        'Harry Potter' => 'J.K. Rowling',
        'Lord of the Rings' =>'John Smith',
        'Cinderella'=>'Mike Brown',
        'Iron Man' => 'Stan Lee',
        'Alice in Borderland' => 'Ekta Name'
    ];
    $books['Romeo and Juliet'] = 'William Shakespeare';
//    unset($books['Romeo and Juliet']);
//    var_dump(count($books));
//    var_dump($books);

//    var_dump(array_keys($books));
//    var_dump(array_values($books));
//
//    foreach($books as $book => $author){
//        var_dump($book,$author);
//    }


    $inventory = [
        'Laptop' => 15,
        'Tablet' => 25,
        'Smartphone' => 40,
        'Smartwatch' => 10,
        'Headphones' => 30
    ];

    $categories = array_keys($inventory);
    sort($categories);
    var_dump($categories);
    ?></pre>

</body>
</html>