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
    require_once __DIR__.'/inc/functions.inc.php';
    $text = "PHP (Hypertext Preprocessor) is a popular open-source scripting language mainly used for web development.\nIt runs on the server side, allowing developers to create dynamic and interactive websites.\nPHP can easily be embedded into HTML, connect to databases like MySQL, and handle tasks such as form processing, file uploads, and session management.\nIts simplicity, flexibility, and wide community support make it a go-to choice for both beginners and professionals in web development.";


//    var_dump(nl2br($text));

    var_dump(str_replace('?','!',"Hello World!"));
    var_dump(str_replace(['?','World'],['!','Mars'],"Hello World!"));
    ?></pre>

<p>
    <?php
        echo nl2br(e("Rakib\nMondal"));
    ?>

    <?php
    /*
        echo nl2br(e($text));
    */
    ?>

    <?php echo str_replace("\n","<br></br>",$text) ;?>
</p>
</body>
</html>