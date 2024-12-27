<?php
$courses = explode(", ", trim(fgets(STDIN)));

while (true) {
    $command = trim(fgets(STDIN));
    if ($command == "course start") {
        break;
    }

    $parts = explode(":", $command);
    $action = $parts[0];

    if ($action == "Add") {
        $lesson = $parts[1];
        if (!in_array($lesson, $courses)) {
            $courses[] = $lesson;
        }
    } elseif ($action == "Insert") {
        $lesson = $parts[1];
        $index = (int) $parts[2];
        if (!in_array($lesson, $courses)) {
            array_splice($courses, $index, 0, $lesson);
        }
    } elseif ($action == "Remove") {
        $lesson = $parts[1];
        if (($key = array_search($lesson, $courses)) !== false) {
            array_splice($courses, $key, 1);
        }
    } elseif ($action == "Swap") {
        $lesson1 = $parts[1];
        $lesson2 = $parts[2];
        if (in_array($lesson1, $courses) && in_array($lesson2, $courses)) {
            $index1 = array_search($lesson1, $courses);
            $index2 = array_search($lesson2, $courses);
            $courses[$index1] = $lesson2;
            $courses[$index2] = $lesson1;

            $index1Ex = array_search($lesson1 . "-Exercise", $courses);
            $index2Ex = array_search($lesson2 . "-Exercise", $courses);

            if ($index1Ex !== false) {
                $courses[$index1Ex] = $lesson2 . "-Exercise";
            }
            if ($index2Ex !== false) {
                $courses[$index2Ex] = $lesson1 . "-Exercise";
            }
        }
    } elseif ($action == "Exercise") {
        $lesson = $parts[1];
        if (in_array($lesson, $courses)) {
            $lessonEx = $lesson . "-Exercise";
            if (!in_array($lessonEx, $courses)) {
                $index = array_search($lesson, $courses);
                array_splice($courses, $index + 1, 0, $lessonEx);
            }
        } else {
            $courses[] = $lesson;
            $courses[] = $lesson . "-Exercise";
        }
    }
}

foreach ($courses as $index => $lesson) {
    echo ($index + 1) . "." . $lesson . "\n";
}
?>