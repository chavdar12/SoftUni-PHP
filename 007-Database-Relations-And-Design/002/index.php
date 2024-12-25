<?php
include './db/config.php';
$countries = getCountries();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries List</title>
</head>
<body>

<header>
    <h1>List of Countries</h1>
</header>

<main>
    <?php if (!empty($countries)): ?>
        <section>
            <h2>Countries Data</h2>
            <table>
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
        </section>
    <?php else: ?>
        <p>No countries found.</p>
    <?php endif; ?>
</main>

<footer>
    <p>&copy; 2024 Geography Database</p>
</footer>

</body>
</html>