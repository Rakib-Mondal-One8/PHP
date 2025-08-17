<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $zip = new ZipArchive();
    $zip->open(__DIR__ . '/Archive.zip');
    var_dump($zip->count());

    var_dump($zip);

    $numFiles = $zip->count();
    for ($x = 0; $x < $numFiles; $x++) {
        $filename = $zip->getNameIndex($x);
        var_dump($filename);
    }
    
    var_dump($zip->getFromName('message.txt'));
    ?>
</body>

</html>