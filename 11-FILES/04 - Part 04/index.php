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
    <header><h1>Important file functions</h1></header>
    <main><pre><?php
        var_dump(file_exists(__DIR__.'/images/IMG_0933.jpg'));
            var_dump(file_exists(__DIR__.'/images/IMG_0933.txt'));
            var_dump(file_exists(__DIR__.'/images'));
            var_dump(is_file(__DIR__.'/images'));
            var_dump(is_dir(__DIR__.'/images'));

            var_dump(filesize(__DIR__.'/images/IMG_0933.jpg') / 1024 /1024);
    ?></pre></main>
</body>
</html>