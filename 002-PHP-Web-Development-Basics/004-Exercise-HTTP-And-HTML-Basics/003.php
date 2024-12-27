<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
</head>
<body>
<main>
    <h1>Sum Calculator</h1>

    <form method="get">
        <?php if (isset($sum)): ?>
            <div><strong>Result:</strong> <?= $sum ?></div>
        <?php endif; ?>

        <div>
            <label for="num1">First Number:</label>
            <input type="number" id="num1" name="num1" required/>
        </div>

        <div>
            <label for="num2">Second Number:</label>
            <input type="number" id="num2" name="num2" required/>
        </div>

        <div>
            <button type="submit">Calculate Sum</button>
        </div>
    </form>
</main>

<?php
if (isset($_GET['num1'], $_GET['num2'])) {
    $n1 = intval($_GET['num1']);
    $n2 = intval($_GET['num2']);
    $sum = $n1 + $n2;
    $sum = "$n1 + $n2 = $sum";
}
?>
</body>
</html>