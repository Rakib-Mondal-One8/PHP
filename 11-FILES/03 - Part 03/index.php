<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/simple.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php
//        var_dump(pathinfo('index.php')['extension']);
            var_dump(pathinfo('index.php',PATHINFO_EXTENSION));

        $handle = opendir(__DIR__ . '/images');

        $images = [];
        $allowedExtensions = [
                'jpg',
                'jpeg',
                'png'
        ];
         while(($file = readdir($handle)) !== false){
             if($file === '.' || $file === '..')continue;

             $extension = pathinfo($file,PATHINFO_EXTENSION);

//             if($extension !== 'jpg' && $extension !== 'jpeg' && $extension !== 'png')continue;
             if(!in_array($extension, $allowedExtensions))continue;
             var_dump($file);
             $images[] = $file;
         }

         closedir($handle);
    ?></pre></main>

    <?php foreach($images as $image): ?>
        <img src="images/<?php echo rawurlencode($image); ?>" alt=""/>
    <?php endforeach; ?>
</body>
</html>