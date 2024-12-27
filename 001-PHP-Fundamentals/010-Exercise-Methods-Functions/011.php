<?php
function arrayManipulator($array) {
    $commands = [
        'exchange' => function($index) use ($array) {
            if ($index < 0 || $index >= count($array)) {
                echo "Invalid index\n";
            } else {
                $array = array_merge(array_slice($array, $index + 1), array_slice($array, 0, $index + 1));
                print_r($array);
            }
        },
        'max' => function($type) use ($array) {
            $filter = ($type === 'even') ? '/[02468]/' : '/[13579]/';
            $filtered = array_filter($array, function($n) use ($filter) {
                return preg_match($filter, $n);
            });
            if (empty($filtered)) {
                echo "No matches\n";
            } else {
                echo max($filtered);
            }
        }
    ];
}
?>