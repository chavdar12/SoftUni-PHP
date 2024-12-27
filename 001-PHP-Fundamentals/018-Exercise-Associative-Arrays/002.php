<?php
$n = intval(fgets(STDIN));
$students = [];

for ($i = 0; $i < $n; $i++) {
    $name = trim(fgets(STDIN));
    $grade = floatval(fgets(STDIN));

    if (!isset($students[$name])) {
        $students[$name] = [];
    }

    $students[$name][] = $grade;
}

foreach ($students as $name => $grades) {
    $averageGrade = array_sum($grades) / count($grades);
    if ($averageGrade >= 4.50) {
        $students[$name] = number_format($averageGrade, 2);
    } else {
        unset($students[$name]);
    }
}

arsort($students);

foreach ($students as $name => $averageGrade) {
    echo "$name -> $averageGrade\n";
}
?>