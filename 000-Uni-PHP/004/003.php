<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Please enter your information:</h2>

<form name="form" method="post" action="#">
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" required><br><br>

    <label for="month">Month:</label><br>
    <input type="text" id="month" name="month" required><br><br>

    <label for="year">Year:</label><br>
    <input type="number" id="year" name="year" required><br><br>

    <p>Please choose the kinds of weather you experienced from the list below:</p>
    <p>Choose all that apply:</p>

    <label><input type="checkbox" name="weather[]" value="sunshine"/> Sunshine</label><br/>
    <label><input type="checkbox" name="weather[]" value="clouds"/> Clouds</label><br/>
    <label><input type="checkbox" name="weather[]" value="rain"/> Rain</label><br/>
    <label><input type="checkbox" name="weather[]" value="hail"/> Hail</label><br/>
    <label><input type="checkbox" name="weather[]" value="sleet"/> Sleet</label><br/>
    <label><input type="checkbox" name="weather[]" value="snow"/> Snow</label><br/>
    <label><input type="checkbox" name="weather[]" value="wind"/> Wind</label><br/>
    <label><input type="checkbox" name="weather[]" value="cold"/> Cold</label><br/>
    <label><input type="checkbox" name="weather[]" value="heat"/> Heat</label><br/>

    <input type="submit" name="submit" value="GO"> <br><br>
</form>

<?php
if (isset($_POST['submit'])) {
    $city = htmlspecialchars($_POST['city']);
    $month = htmlspecialchars($_POST['month']);
    $year = $_POST['year'];
    $weather = $_POST['weather'] ?? [];

    $inputLocal = "In $city in the month of $month, $year, you observed the following weather:";

    echo "<p>$inputLocal</p>";

    if (!empty($weather)) {
        echo "<ul>";
        foreach ($weather as $w) {
            echo "<li>" . htmlspecialchars($w) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No weather conditions selected.</p>";
    }
}
?>

</body>
</html>