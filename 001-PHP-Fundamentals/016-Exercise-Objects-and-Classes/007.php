<?php

$teams = [];
$usersTeams = [];

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $data = explode("-", fgets(STDIN));
    $creator = $data[0];
    $teamName = trim($data[1]);

    if (isset($teams[$teamName])) {
        echo "Team {$teamName} was already created!\n";
    } elseif (isset($usersTeams[$creator])) {
        echo "{$creator} cannot create another team!\n";
    } else {
        $teams[$teamName] = ['creator' => $creator, 'members' => []];
        $usersTeams[$creator] = $teamName;
        echo "Team {$teamName} has been created by {$creator}!\n";
    }
}

while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end of assignment') {
        break;
    }

    $data = explode("->", trim($input));
    $user = $data[0];
    $teamName = $data[1];

    if (!isset($teams[$teamName])) {
        echo "Team {$teamName} does not exist!\n";
    } elseif (isset($usersTeams[$user])) {
        echo "Member {$user} cannot join team {$teamName}!\n";
    } else {
        $teams[$teamName]['members'][] = $user;
        $usersTeams[$user] = $teamName;
    }
}

$teamsToDisband = [];

foreach ($teams as $teamName => $team) {
    if (empty($team['members'])) {
        $teamsToDisband[] = $teamName;
    }
}

foreach ($teams as $teamName => $team) {
    if (!in_array($teamName, $teamsToDisband)) {
        sort($team['members']);
        echo "{$teamName} - {$team['creator']} -- " . implode(' -- ', $team['members']) . "\n";
    }
}

if (!empty($teamsToDisband)) {
    echo "Teams to disband:\n";
    foreach ($teamsToDisband as $teamName) {
        echo "{$teamName}\n";
    }
}
?>