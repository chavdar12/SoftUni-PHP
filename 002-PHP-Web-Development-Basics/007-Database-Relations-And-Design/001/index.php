<?php
include './db/config.php';
$countries = getCountries();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries List</title>
</head>
<body>

<main>
    <h1>List of Countries</h1>

    <?php if (!empty($countries)): ?>
        <table border="1">
            <thead>
            <tr>
                <th>Country Code</th>
                <th>Country Name</th>
                <th>Capital City</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= htmlspecialchars($country['country_code']) ?></td>
                    <td><?= htmlspecialchars($country['country_name']) ?></td>
                    <td><?= htmlspecialchars($country['capital']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No countries found.</p>
    <?php endif; ?>
</main>

</body>
</html>