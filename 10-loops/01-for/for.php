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

    for($i=0 ; $i<=10 ; $i=$i+1){
        echo $i . ' ';
    }

    echo "\n";

    for($i=10 ; $i >=0 ; $i--){
        echo $i . ' ';
    }

    echo "\n";

    for($i=0 ; $i<=10 ; $i += 2){
        echo $i . ' ';
    }

    echo "\n";

    $i = 0;
    for(;$i<=15;$i++){
        echo $i . ' ';
    }

    echo "\n";

    for($i=0;$i<=10;){
        echo $i . ' ';
        $i++;
    }
    echo "\n";

    for ($i = 0, $j = 10; $i < 5; $i++, $j--) {
        echo "i=$i, j=$j\n";
    }
    echo "\n";

    for(;;){
        echo 'Hi';
        break;
    }
?></pre>

<ul>
    <?php for($i=0;$i<=100;$i++) : ?>
        <?php if($i === 10)continue; ?>
        <?php if($i === 50)break; ?>
        <li>
            <?php echo $i;?>
        </li>
    <?php endfor; ?>
</ul>

</body>
</html>
