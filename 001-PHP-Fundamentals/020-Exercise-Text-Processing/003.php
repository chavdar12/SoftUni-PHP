<?php
$path = trim(fgets(STDIN));
$pathInfo = pathinfo($path);

echo "File name: " . $pathInfo['filename'] . PHP_EOL;
echo "File extension: " . $pathInfo['extension'] . PHP_EOL;
?>