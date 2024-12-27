<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

class Department {
    public $name;
    public $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
    }

    public function averageSalary() {
        $totalSalary = 0;
        foreach ($this->employees as $employee) {
            $totalSalary += $employee->salary;
        }
        return $totalSalary / count($this->employees);
    }
}

$n = intval(trim(fgets(STDIN)));
$departments = [];

for ($i = 0; $i < $n; $i++) {
    $data = explode(" ", trim(fgets(STDIN)));
    $name = $data[0];
    $salary = floatval($data[1]);
    $departmentName = $data[2];

    if (!isset($departments[$departmentName])) {
        $departments[$departmentName] = new Department($departmentName);
    }
    $departments[$departmentName]->addEmployee(new Employee($name, $salary));
}

$highestAvgSalaryDept = null;
$highestAvgSalary = -PHP_INT_MAX;

foreach ($departments as $dept) {
    $avgSalary = $dept->averageSalary();
    if ($avgSalary > $highestAvgSalary) {
        $highestAvgSalary = $avgSalary;
        $highestAvgSalaryDept = $dept;
    }
}

echo "Highest Average Salary: {$highestAvgSalaryDept->name}\n";

usort($highestAvgSalaryDept->employees, function($a, $b) {
    return $b->salary - $a->salary;
});

foreach ($highestAvgSalaryDept->employees as $employee) {
    echo "{$employee->name} {$employee->salary}\n";
}

?>