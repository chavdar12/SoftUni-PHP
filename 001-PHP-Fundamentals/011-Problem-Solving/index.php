<?php
include 'fourdoku.php';

$fourdoku = new Fourdoku();
$fourdoku->generate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourdoku Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Fourdoku</h1>
<div class="board">
    <?php
    $fourdoku->print();
    ?>
</div>
</body>
</html>