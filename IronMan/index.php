<?php
class Hero
{
    public $name;
    public $costume;
    public $armature;

    public function __construct($name, $costume, $armature)
    {
        $this->name = $name;
        $this->costume = $costume;
        $this->armature = $armature;
    }

    function getCostume()
    {
        return $this->costume;
    }

    function getArmature()
    {
        return $this->armature;
    }
    function getName()
    {
        return $this->name;
    }
}

$persona = new Hero("Marcos", "de plata", "Martillo");
echo $persona->name . ',' . $persona->costume . ',' . $persona->armature . "\n";
