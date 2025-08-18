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
    $skip = [
        'Business','c++'
    ];
    foreach($categories as $category){
        echo $category . "\n";
        /*
        if($category === 'Business')continue;
        if($category === 'Physics')continue;
        */
        if(in_array($category,$skip))continue;
        if($category === 'German')break;
        var_dump($category);
    }

    ?></pre>

<ul>
    <?php foreach($categories as $category): ?>
        <?php if($category === 'Business') continue; ?>
        <?php if($category === 'c++'):?>
            <?php continue; ?>
        <?php endif; ?>
        <li>
            <?php echo $category; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
