<?php

class Programmer extends Person
{
    private $langs = [];

    public function addLanguages()
    {
        $this->langs = ["Lisp", "Java"];
        $this->langs[] = "PHP";
        echo "<br>I also know {$this->langs[count($this->langs) - 1]}.<br>";
        echo "Languages known: <br>";
        print_r($this->langs);
    }
}