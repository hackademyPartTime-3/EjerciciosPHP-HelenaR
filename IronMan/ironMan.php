
<?php
require("index.php");

class IronMan extends Hero
{
    public function getAll()
    {
        return $this->name . "," . $this->armature . "\n";
    }
}


$Heroe = new IronMan("Tony", "Iron man traje", "Mark");
echo $Heroe->getAll();
