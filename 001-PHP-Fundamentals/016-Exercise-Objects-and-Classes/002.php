<?php

class Student {
    private $name;
    private $grades;

    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    public function getName() {
        return $this->name;
    }

    public function getGrades() {
        return $this->grades;
    }

    public function getAverageGrade() {
        return array_sum($this->grades) / count($this->grades);
    }
}

$studentsCount = intval(fgets(STDIN));
$students = [];

for ($i = 0; $i < $studentsCount; $i++) {
    $data = explode(" ", fgets(STDIN));
    $name = $data[0];
    $grades = array_map('floatval', array_slice($data, 1));

    $students[] = new Student($name, $grades);
}

$filteredStudents = array_filter($students, function ($student) {
    return $student->getAverageGrade() >= 5.00;
});

usort($filteredStudents, function ($a, $b) {
    if ($a->getName() === $b->getName()) {
        return $b->getAverageGrade() <=> $a->getAverageGrade();
    }
    return $a->getName() <=> $b->getName();
});

foreach ($filteredStudents as $student) {
    echo "{$student->getName()} -> " . number_format($student->getAverageGrade(), 2) . "\n";
}
?>