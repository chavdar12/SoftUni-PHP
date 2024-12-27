<?php
class Student {
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    public function __construct($firstName, $lastName, $age, $city) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }

    public function getCity() {
        return $this->city;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }
}

$students = [];
while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end') {
        break;
    }
    list($firstName, $lastName, $age, $city) = explode(' ', trim($input));
    $students[] = new Student($firstName, $lastName, $age, $city);
}

$city = fgets(STDIN);

foreach ($students as $student) {
    if ($student->getCity() === trim($city)) {
        echo $student->getFirstName() . " " . $student->getLastName() . " is " . $student->getAge() . " years old." . PHP_EOL;
    }
}
?>