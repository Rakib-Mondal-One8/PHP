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
        var_dump($_GET);
    ?></pre>

<?php if(!empty($_GET['book'])) : ?>
    <h1><?php echo $_GET['book']; ?></h1>
<?php endif;?>

    <?php
    /*
     <a style="color: greenyellow" href="querystring.php?book=Harry Potter">Harry Potter</a>
     <a href="querystring.php?book=Beauty & the Beast">Beauty & the Beast</a>
     */
    ?>

    <a href="querystring.php?<?php echo http_build_query(['book' => "Harry Potter"]); ?>">Harry Potter</a>
    <a href="querystring.php?<?php echo http_build_query(['book' => "Beauty & the Beast",'author' => 'Seta Bhanga Author']); ?>">Beauty & the Beast</a>

</body>
</html>
