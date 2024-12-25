<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<main>
    <h1>Calculator</h1>
    <form method="get">
        <fieldset>
            <legend>Operation</legend>
            <label for="operation">Choose operation:</label>
            <select name="operation" id="operation" required>
                <option value="sum">Sum</option>
                <option value="subtract">Subtract</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Numbers</legend>
            <label for="number_one">Number 1:</label>
            <input type="number" id="number_one" name="number_one" required/>

            <label for="number_two">Number 2:</label>
            <input type="number" id="number_two" name="number_two" required/>
        </fieldset>

        <button type="submit" name="calculate">Calculate</button>

        <?php if (isset($output)): ?>
            <fieldset>
                <legend>Result</legend>
                <label for="result">Result:</label>
                <input type="text" id="result" disabled readonly value="<?= htmlspecialchars($output) ?>"/>
            </fieldset>
        <?php endif; ?>
    </form>
</main>

<?php
if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];
    $output = "";

    if ($operation == "sum") {
        $output = $numberOne + $numberTwo;
    } elseif ($operation == "subtract") {
        $output = $numberOne - $numberTwo;
    } else {
        $output = "Invalid operation";
    }
}
?>
</body>
</html>