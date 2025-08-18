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
<?php
$category1 = 'Programming';
$category2 = 'Business';
$category3 = 'German';
$category4 = 'Physics';
$category5 = 'C++';
?>

<pre>
   <ul>
    <l1><?php echo $category1; ?></l1>
    <l1><?php echo $category2 ?></l1>
    <l1><?php echo $category3 ?></l1>
    <l1><?php echo $category4 ?></l1>
    <l1><?php echo $category5 ?></l1>
</ul>

</pre>

<select>
    <option><?php echo $category1; ?></option>
    <option><?php echo $category2; ?></option>
    <option><?php echo $category3; ?></option>
    <option><?php echo $category4; ?></option>
    <option><?php echo $category5; ?></option>
</select>

</body>
</html>