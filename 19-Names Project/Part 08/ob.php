<?php 

header('Content-Type: text/plain');

ob_start();
echo 'Hello World';

$content = ob_get_clean();
var_dump($content);
// ob_flush();
// ob_clean();


echo "---------\n";

ob_start();
?>

<h1>Hello World !!</h1>

<?php
$content = ob_get_clean();

var_dump($content);

echo "--------\n";

ob_start();
require __DIR__.'/view.php';

$content = ob_get_clean();
var_dump($content);