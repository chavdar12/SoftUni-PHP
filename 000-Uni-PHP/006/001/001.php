<?php
// Open file for writing (creates a new file or truncates the existing one)
$myfile = fopen("data.txt", "w") or die("Неуспешно отваряне на файл!");
$txt = "Днисциплина Web приложения се изучава през втория семестър на втори курс. \nТази дисциплина се изучава от студенти, които са специалност СИТ.\n";
fwrite($myfile, $txt);
fclose($myfile);

// Open file for appending (preserves existing content)
$myfile = fopen("data.txt", "a") or die("Неуспешно отваряне на файл!");
$txt = "Студентите редовно си пишат домашните.\n";
fwrite($myfile, $txt);
fclose($myfile);

// Read and display the contents of the file
$content = file_get_contents('data.txt');
echo "Съдържание на файл data.txt с размер: " . filesize("data.txt") . " байта <br>";
echo nl2br($content);  // Use nl2br to preserve line breaks when displaying
?>