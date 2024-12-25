<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information Form</title>
</head>
<body>

<main>
    <section>
        <h1>User Information Form</h1>
        <form method="get">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" required/>
            </div>
            <div>
                <label for="phone">Phone number: </label>
                <input type="text" name="phone" id="phone" required/>
            </div>
            <div>
                <label for="age">Age: </label>
                <input type="number" name="age" id="age" required/>
            </div>
            <div>
                <label for="address">Address: </label>
                <input type="text" name="address" id="address" required/>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>

    <?php
    if (isset($_GET['name'], $_GET['phone'], $_GET['age'], $_GET['address'])) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];

        echo "<section>";
        echo "<h2>Submitted Information</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><td>$name</td></tr>";
        echo "<tr><th>Age</th><td>$age</td></tr>";
        echo "<tr><th>Phone number</th><td>$phone</td></tr>";
        echo "<tr><th>Address</th><td>$address</td></tr>";
        echo "</table>";
        echo "</section>";
    }
    ?>
</main>

</body>
</html>