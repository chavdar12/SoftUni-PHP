<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information Form</title>
</head>
<body>
<main>
    <h1>Enter Your Information</h1>
    <form method="get">
        <div>
            <label for="personName">Name:</label>
            <input type="text" id="personName" name="personName" required/>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required/>
        </div>
        <div>
            <label for="townId">Town:</label>
            <select id="townId" name="townId">
                <option value="10">Sofia</option>
                <option value="20">Varna</option>
                <option value="30">Plovdiv</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
    if (!empty($_GET)) {
        var_dump($_GET);
    }
    ?>
</main>
</body>
</html>