<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter Names and Ages</title>
</head>
<body>
<main>
    <h1>Filter Names and Ages</h1>
    <form method="get">
        <fieldset>
            <legend>Filter Criteria</legend>
            <label for="delimiter">Delimiter:</label>
            <select name="delimiter" id="delimiter" required>
                <option value=",">,</option>
                <option value="|">|</option>
                <option value="&">&</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Input Data</legend>
            <label for="names">Names:</label>
            <input type="text" id="names" name="names" required/>

            <label for="ages">Ages:</label>
            <input type="text" id="ages" name="ages" required/>
        </fieldset>

        <button type="submit" name="filter">Filter</button>
    </form>

    <?php
    if (isset($_GET['names'], $_GET['ages'], $_GET['delimiter'])) {
        $names = $_GET['names'];
        $ages = $_GET['ages'];
        $delimiter = $_GET['delimiter'];
        $names = explode($delimiter, $names);
        $ages = explode($delimiter, $ages);
        ?>
        <table border="1" cellpadding="5">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < count($names); $i++) {
                if ($ages[$i] >= 18) {
                    echo "<tr><td>" . htmlspecialchars($names[$i]) . "</td><td>" . htmlspecialchars($ages[$i]) . "</td></tr>";
                }
            }
            ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</main>
</body>
</html>