<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="simple.css">
    <style>
        h1 {
            height: 10rem;
            width: 20rem;
            background-color: #585858;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <pre><?php
        $pageTitle = "PHP is Amazing";
//        $pageTitle = '0';
        $pageTitle = '';
        unset($pageTitle);
        echo var_dump(isset($pageTitle));
        echo var_dump(empty($pageTitle));
    ?></pre>

    <?php
        if(isset($pageTitle) && $pageTitle !== ''){
            echo "<h1>{$pageTitle}</h1>";
        }
        if(!empty($pageTitle)){
            echo "<h2>{$pageTitle}</h2>";
        }
    ?>
</body>
</html>
