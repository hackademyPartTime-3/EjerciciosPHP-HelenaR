<?php
require "index.php";

class Villan extends Hero
{

    function getAll()
    {
        return $this->name . ',' . $this->armature . ',' . $this->costume . "\n";
    }
}

$villano = new Villan("Thano", "de oro", "espada");
echo $villano->getAll();
