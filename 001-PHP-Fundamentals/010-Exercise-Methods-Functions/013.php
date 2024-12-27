<?php
function isPrime($n) {
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET["num"];
    for ($i = $num; $i >= 2; $i--) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
?>