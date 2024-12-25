<?php
$array = [10, 35, 30, 44, 55, 14, 73];

$array5 = array_filter($array, function ($value) {
    return $value % 5 == 0;
});

function noNULLvalues($var): bool
{
    return ($var != NULL && $var != "");
}

$filter = array_filter($array5, "noNULLvalues");

echo "<br>Кратни на 5 числа: ";
print_r($filter);

echo "<br> Произведение = " . array_product($array5);
echo "<br><br>'Отпечатва елементите на масива, които са по-големи от своите съседи'<br><br>";

for ($j = 1; $j < sizeof($array5) - 1; $j++) {
    if ($array5[$j] > $array5[$j - 1] && $array5[$j] > $array5[$j + 1]) {
        echo "<br>$array5[$j]";
    }
}

$file = fopen("array.txt", "w") or die("Неуспешно отваряне на файл!");
$txt = implode(",", $array);
fwrite($file, $txt);
fclose($file);

if (file_exists('array.txt')) {
    $content = file_get_contents('array.txt');
    echo "<br>Съдържание на файл array.txt с размер: " . filesize("array.txt") . " байта <br>";
    echo $content;
} else {
    echo "File does not exist.";
}

echo "<br><br>";

$array = explode(",", $content);
echo "<br>";
print_r($array);
echo "<br>";