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
        include 'vars.php';
        if($ServerStatus === 'ok'){
            echo "🟢 Welcome to our website . Browse and Enjoy our content \n";
        }
        else if($ServerStatus === 'error'){
            echo "㊙️ We got a serious error right now . Please call us at: +1 (234) 5678";
        }
        else {
            echo "🔴 We're currently undergoing maintenance. Please try again later. \n";
        }
    ?></pre>
</body>
</html>
