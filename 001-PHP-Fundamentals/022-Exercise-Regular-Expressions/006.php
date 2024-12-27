<?php
$tickets = explode(", ", trim(fgets(STDIN)));

foreach ($tickets as $ticket) {
    if (strlen($ticket) != 20) {
        echo "Invalid ticket\n";
        continue;
    }

    $left = substr($ticket, 0, 10);
    $right = substr($ticket, 10);

    $pattern = '/([@#$^])\1{5,9}/';
    preg_match($pattern, $left, $leftMatch);
    preg_match($pattern, $right, $rightMatch);

    if ($leftMatch && $rightMatch) {
        $symbol = $leftMatch[1];
        $length = strlen($leftMatch[0]);
        if ($length == 10) {
            echo "ticket \"{$ticket}\" - {$length}{$symbol} Jackpot!\n";
        } else {
            echo "ticket \"{$ticket}\" - {$length}{$symbol}\n";
        }
    } else {
        echo "ticket \"{$ticket}\" - no match\n";
    }
}
?>