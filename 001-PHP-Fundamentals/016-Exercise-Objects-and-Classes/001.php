<?php

$people = [];

while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'End') {
        break;
    }

    $data = explode(" ", trim($input));
    $name = $data[0];
    $id = $data[1];
    $age = (int)$data[2];

    $people[] = ['name' => $name, 'id' => $id, 'age' => $age];
}

usort($people, function ($a, $b) {
    return $a['age'] <=> $b['age'];
});

foreach ($people as $person) {
    echo "{$person['name']} with ID: {$person['id']} is {$person['age']} years old.\n";
}
?>