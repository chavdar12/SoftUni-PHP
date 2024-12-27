<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Family {
    private $members = [];

    public function addMember($member) {
        $this->members[] = $member;
    }

    public function getOldestMember() {
        usort($this->members, function($a, $b) {
            return $b->age - $a->age;
        });
        return $this->members[0];
    }
}

$n = intval(trim(fgets(STDIN)));
$family = new Family();

for ($i = 0; $i < $n; $i++) {
    $data = explode(" ", trim(fgets(STDIN)));
    $name = $data[0];
    $age = intval($data[1]);
    $family->addMember(new Person($name, $age));
}

$oldest = $family->getOldestMember();
echo $oldest->name . " " . $oldest->age . "\n";

?>