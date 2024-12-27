<?php
$savings = floatval(fgets(STDIN));
$drums = array_map('intval', explode(" ", trim(fgets(STDIN))));

while (true) {
    $command = trim(fgets(STDIN));
    if ($command == "Hit it again, Gabsy!") {
        break;
    }

    $hitPower = intval($command);
    foreach ($drums as &$drum) {
        $drum -= $hitPower;
        if ($drum <= 0) {
            if ($savings >= $drum * 3) {
                $savings -= $drum * 3;
                $drum = $drum * 3;
            } else {
                $drum = null;
            }
        }
    }
    $drums = array_filter($drums, fn($drum) => $drum !== null);
}

echo implode(" ", $drums) . "\n";
echo "Gabsy has " . number_format($savings, 2) . "lv.\n";
?>