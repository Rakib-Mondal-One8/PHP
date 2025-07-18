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
<pre>
<?php
    include 'vars.php';
    if($ServerStatus === 'ok'){
        echo "🟢🟢🟢🟢🟢🟢 \n";
        echo "🟢 Welcome to our website . Browse and Enjoy our content \n";
    }
    if($ServerStatus === 'Maintenance'){
        echo "🔴🔴🔴🔴🔴🔴 \n";
        echo "We're currently undergoing maintenance. Please try again later. \n";
    }

    echo "-------------------- \n";

    if($ServerStatus === 'ok') echo "🟢🟢🟢🟢🟢🟢 \n";

?>
</pre>
</body>
</html>