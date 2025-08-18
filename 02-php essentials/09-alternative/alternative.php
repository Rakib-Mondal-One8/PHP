<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="simple.css">
    <style>
        h1{
            width: 20rem;
            height: 10rem;
            background-color: #ababab;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <pre><?php
        $pageTitle = 'PHP is Amazing!';
    ?></pre>

    <?php
        if(!empty($pageTitle)){
            echo "<h1>{$pageTitle}</h1>";
        }
    ?>
    <?php if(!empty($pageTitle)): ?>
        <h1>
            <span><?php echo $pageTitle; ?></span>
        </h1>
    <?php endif; ?>

</body>
</html>