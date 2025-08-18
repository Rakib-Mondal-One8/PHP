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
            function e($value){
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }


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

                if(!in_array($extension, $allowedExtensions))continue;


                $title = '';
                $content = [];

                $fileWithoutExt = pathinfo($file,PATHINFO_FILENAME);

                $txtFile = __DIR__."/images/{$fileWithoutExt}.txt";
                if(file_exists($txtFile)){
                    $txt = file_get_contents($txtFile);

                    $info = explode("\n",$txt);

                    $title = $info[0];
                    $content = [];

//                    for($i = 1;$i<count($info);$i++) $content[] = $info[$i];
                    unset($info[0]);
                    $content = array_values($info);
                }

                $images[] = [
                    'image' => $file,
                    'title' => $title,
                    'content' => $content
                ];
            }

            closedir($handle);
    ?></pre></main>

    <?php foreach($images as $image): ?>
        <figure>
            <h1><?php echo e($image['title']); ?></h1>
            <img src="./images/<?php echo rawurlencode($image['image'] ) ?>" alt=""/>
            <figcaption>
                <?php foreach($image['content'] as $content): ?>
                    <p><?php echo e($content); ?></p>
                <?php endforeach; ?>
            </figcaption>
        </figure>
    <?php endforeach; ?>
</body>
</html>