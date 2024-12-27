<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET["num"];
    for ($i = 2; $i <= $num; $i += 2) {
        echo $i . " ";
    }
}
?>