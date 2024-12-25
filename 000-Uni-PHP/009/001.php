<?php

class Donation
{
    static $totalDonated = 0;
    static $numberOfDonors = 0;
    private $name;
    private $amount;

    function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
        self::$totalDonated += $amount;
        self::$numberOfDonors++;
    }

    function info(): string
    {
        $percent = ($this->amount / self::$totalDonated) * 100;
        return sprintf("%s donated %.2f (%.2f%%)", $this->name, $this->amount, $percent);
    }
}

$donors = [
    new Donation("Nikola", 85.00),
    new Donation("Mitko", 50.00),
    new Donation("Emily", 90.00),
    new Donation("Iliana", 65.00)
];

foreach ($donors as $donor) {
    echo $donor->info() . "<br>";
}

$total = Donation::$totalDonated;
$number = Donation::$numberOfDonors;
echo "Total Donations = " . $total . "<br>";
echo "Number of Donors = " . $number;