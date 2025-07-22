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
        'Alice in Borderland' => 'Ekta Name',
        0 =>  'This is books #0',
        'Rakib'
    ];
    $books['0'] = 'Over Written';
    var_dump($books[0]);
    var_dump($books);
    ?></pre>

</body>
</html>