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
<h2> Registration Form </h2>
<form name="form" method="post" action="#">
    <label for="fName">Name</label><br>
    <input type="text" name="fName" id="fName"><br>

    <label for="lName">Family</label><br>
    <input type="text" name="lName" id="lName"><br>

    <label for="email">E-mail</label><br>
    <input type="text" name="email" id="email"><br>

    <p>Choose a course:</p>
    <input type="checkbox" name="course" value="PHP" id="php">
    <label for="php">PHP</label><br>
    <input type="checkbox" name="course" value="Lisp" id="lisp">
    <label for="lisp">Lisp</label><br>
    <input type="checkbox" name="course" value="Perl" id="perl">
    <label for="perl">Perl</label><br>
    <input type="checkbox" name="course" value="Unix" id="unix">
    <label for="unix">Unix</label><br>

    <p>Additional Information for you?</p>
    <label for="comment"></label>
    <textarea id="comment" name="comment" cols="40" rows="10"></textarea><br>

    <input type="checkbox" name="confirm" value="confirm" id="confirm">
    <label for="confirm">Confirm the receiving of the information</label><br>

    <input type="submit" name="submit" value="Submit"><br>
    <input type="reset" name="reset" value="Reset">
</form>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['confirm'])) {
        echo "Please check the confirmation checkbox to submit!";
    } else {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $courses = $_POST['course'];

        echo "Hello, $fName $lName! <br>";
        echo "Your selected courses are: ";
        foreach ($courses as $k) {
            echo "$k ";
        }
    }
}
?>
</body>
</html>