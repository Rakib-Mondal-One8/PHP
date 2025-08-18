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
    $books = [
        'Harry Potter and the Philosopher',
        'Lord of the Rings',
        'Cinderella',
        'Iron Man',
        'Alice in Borderland'
    ];

    $authors = [
        'J.K. Rowling',
        'John Smith',
        'Mike Brown',
        'Stan Lee',
        'Ekta Name'
    ];
    for($i = 0; $i<count($books);$i++){
        echo " '{$books[$i]}' has been written by {$authors[$i]} \n";
    }
    */

    $books = [
        'Harry Potter' => 'J.K. Rowling',
        'Lord of the Rings' =>'John Smith',
        'Cinderella'=>'Mike Brown',
        'Iron Man' => 'Stan Lee',
        'Alice in Borderland' => 'Ekta Name'
    ];

//    var_dump($books);
//    var_dump(isset($books['Harry Potter']));
//    var_dump(!empty($books['Harry Potter']));
//    var_dump($books['Harry Potter']);

    foreach($books as $key => $value){
        var_dump($key);
//        var_dump($value);
        var_dump($books[$key]);
    }

?></pre>

</body>
</html>