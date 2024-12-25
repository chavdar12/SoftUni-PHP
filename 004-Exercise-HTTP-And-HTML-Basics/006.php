<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Information Form</title>
</head>
<body>

<main>
    <section>
        <h1>Personal Information Form</h1>
        <form method="get">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Name..." required/>
            </div>
            <div>
                <label for="age">Age: </label>
                <input type="text" name="age" id="age" placeholder="Age..." required/>
            </div>
            <div>
                <label>Gender:</label>
                <input type="radio" name="gender" value="male" id="male" required/>
                <label for="male">Male</label>

                <input type="radio" name="gender" value="female" id="female" required/>
                <label for="female">Female</label>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>

    <?php
    if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        $gender = htmlspecialchars($_GET['gender']);

        echo "<section>";
        echo "<h2>Your Submitted Information</h2>";
        echo "<p>My name is <strong>$name</strong>. I am <strong>$age</strong> years old. I am <strong>$gender</strong>.</p>";
        echo "</section>";
    }
    ?>
</main>

</body>
</html>