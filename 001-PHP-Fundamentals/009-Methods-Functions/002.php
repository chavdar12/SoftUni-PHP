<?php
function printGrade($grade) {
    if ($grade >= 2.00 && $grade <= 2.99) {
        echo "Fail\n";
    } elseif ($grade >= 3.00 && $grade <= 3.49) {
        echo "Poor\n";
    } elseif ($grade >= 3.50 && $grade <= 4.49) {
        echo "Good\n";
    } elseif ($grade >= 4.50 && $grade <= 5.49) {
        echo "Very good\n";
    } elseif ($grade >= 5.50 && $grade <= 6.00) {
        echo "Excellent\n";
    }
}

$grade = floatval(fgets(STDIN));
printGrade($grade);
?>