<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmer Example</title>
</head>
<body>
<?php
echo "Hello! <br>";
$newProgram = new Programmer("Ivan", "Ivanov");
$newProgram->showPerson();
$newProgram->addLanguages();
?>
</body>
</html>