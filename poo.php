<?php
/*  class Person {
    public $id;
    public $name;
    public $height;
    public $position;

    function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
        $this->height = 0;
        $this-> postition = 0;
    }

    function move ($steps){
        $this-> position +=$steps;//es una forma de hacer un setter indirecto. asignamos un valor a una propiedad del objeto en base a su valor anterior y a un parametro.
    }
}
$yo = new Person (1, 'Helena Rodrigues');
echo $yo->name ."\n";

$yo->name = "Claudia";
echo $yo->name ."\n";  */

//1-Crear una clase Persona que tenga propiedades públicas (nombre,apellido y edad). Crear 2 personas, Julia y Mario. Imprimir su información

/* class person{
    public $name;
    public $surname;
    public $age;
    public $position;

    public function __construct($name, $surname,$age){
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->position=0;

    }


    function actions ($steps){
        $this->position+=$steps;
    }
}
$persona1= new person ('Julia', 'Alvarez',29);
echo $persona1->name ."\n" . $persona1->surname ."\n" . $persona1->age ."\n";

$persona2= new person ('Mario', 'Perez', 32);
echo $persona2->name ."\n" . $persona2->surname ."\n" . $persona2->age;
  */

/* class person1
{


    private $name;
    private $surname;
    private $age;


    function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    function getname()
    {

        return $this->name;
    }

    function getsurname()
    {

        return $this->surname;
    }

    function getage()
    {

        return $this->age;
    }
}

$persona1 = new person1("Julia", "Alvarez", 29);
echo $persona1->getname() . "\n" . $persona1->getsurname() . "\n" . $persona1->getage() . "\n";

$persona2 = new person1('Mario', 'Perez', 32);
echo $persona2->getname() . "\n" . $persona2->getsurname() . "\n" . $persona2->getage(); */

// 3 - Crear una función saludar y la llamo (primero pública y luego privada).

$saludo = "hola";
/* function saludar($saludo)
{
    echo $saludo;
}

saludar($saludo); */

/*  private function saludar($saludo)
{
    echo $saludo;
}

saludar($saludo); */