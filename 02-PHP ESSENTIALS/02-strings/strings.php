<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./simple.css">
    <title>Document</title>
</head>
<body>
<pre>
<?php
    $greeting = "I'm Learning PHP!";
    echo "{$greeting}_!";

    $name = "Rakib";
    $subject = "PHP";

    echo '<br/>';
    echo "I'm {$name} and I'm learning {$subject}. \n";
    echo 'I"m {$name} and I"m learning {$subject}.<br/>';
    echo "\t Hello Jennis \n";
?>
</pre>

<p>
    A first line of text.<?php echo '<br/>'; ?> A second line of text.
</p>
<p>
   A first line of text.  <?php echo "\n" ; ?> A second line of text.
</p>
<p> <?php echo 'My last echo, $abc' ; ?></p>
<p> <?php echo "My last echo, {$abc}" ;?></p>
</body>
</html>