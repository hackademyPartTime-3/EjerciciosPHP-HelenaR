<?php
require "index.php";

class Army extends Hero
{
    public  $Names = ["Supergirl", "Iron Man", "Black Panther", "Thor", "Catwoman", "Daredevil", "Robin", "Incredible Hulk",  "Guardians of the Galaxy", "Spider-Man", "Wonder Woman"];

    function getArmy()
    {
        for ($i = 0; $i < count($this->Names); $i++) {
            echo $this->Names[$i] . "-" . $i . "\n";
        }
        echo "TotalHeroes: " . count($this->Names) . "\n";
    }

    function getArmyRamdon()
    {
        for ($i = 0; $i < 6; $i++) {
            echo $this->Names[mt_rand(0, count($this->Names) - 1)]  . "\n";
        }
    }
}

$ejercito = new Army("Maria", "coraza", "hacha");
echo $ejercito->getArmyRamdon();

echo $ejercito->getArmy();
