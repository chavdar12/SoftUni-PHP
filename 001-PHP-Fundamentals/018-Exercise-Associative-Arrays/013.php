<?php

$players = [];

while (true) {
    $input = trim(fgets(STDIN));

    if ($input === "Season end") {
        break;
    }

    if (strpos($input, " -> ") !== false) {
        list($player, $position, $skill) = explode(" -> ", $input);
        $skill = intval($skill);

        if (!isset($players[$player])) {
            $players[$player] = [];
        }

        if (!isset($players[$player][$position]) || $players[$player][$position] < $skill) {
            $players[$player][$position] = $skill;
        }
    } elseif (strpos($input, " vs ") !== false) {
        list($player1, $player2) = explode(" vs ", $input);

        if (isset($players[$player1]) && isset($players[$player2])) {
            $commonPosition = array_intersect_key($players[$player1], $players[$player2]);
            if ($commonPosition) {
                $totalSkill1 = array_sum($players[$player1]);
                $totalSkill2 = array_sum($players[$player2]);

                if ($totalSkill1 > $totalSkill2) {
                    unset($players[$player2]);
                } elseif ($totalSkill1 < $totalSkill2) {
                    unset($players[$player1]);
                }
            }
        }
    }
}

uasort($players, function ($a, $b) {
    return array_sum($b) - array_sum($a);
});

foreach ($players as $player => $positions) {
    $totalSkill = array_sum($positions);
    echo "{$player}: {$totalSkill} skill\n";
    arsort($positions);
    foreach ($positions as $position => $skill) {
        echo "- {$position} <::> {$skill}\n";
    }
}
?>