<?php
class Song {
    private $typeList;
    private $name;
    private $time;

    public function __construct($typeList, $name, $time) {
        $this->typeList = $typeList;
        $this->name = $name;
        $this->time = $time;
    }

    public function getTypeList() {
        return $this->typeList;
    }

    public function getName() {
        return $this->name;
    }
}

$n = intval(fgets(STDIN));
$songs = [];

for ($i = 0; $i < $n; $i++) {
    list($typeList, $name, $time) = explode('_', fgets(STDIN));
    $songs[] = new Song($typeList, $name, trim($time));
}

$typeListQuery = fgets(STDIN);

foreach ($songs as $song) {
    if ($song->getTypeList() === trim($typeListQuery) || $typeListQuery === 'all') {
        echo $song->getName() . PHP_EOL;
    }
}
?>