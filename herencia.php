<?php
class person
{
    public $name;
    public $surname;
    protected $age;
    private $id;

    public function __construct($name, $surname, $age, $id)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }
    function getAge()
    {
        return $this->age;
    }


    function Greet()
    {
        echo " Hola soy:" . $this->name . $this->surname . "\n";
    }

    private function greets()
    {
        return " Hola " . $this->name  . "\n";
        echo " Hola soy" . $this->name . $this->surname  . "\n";
    }

    public final function eat()
    {
        echo "Hoy comi con:" . $this->name . $this->surname . "\n";
    }
}

//ejer.4- 5 Crear dos subclases que extiendan de Persona, con propiedades y métodos:Estudiante y Docente y modificar en el padre algunas propiedades a protegidas

class student extends person
{
    public static $numAlumnos = 0;
    public $edition = "";

    function __construct($name, $surname, $age, $edition)
    {
        parent::__construct($name, $surname, $age, $edition);

        $this->edition = $edition;
        self::$numAlumnos++;
        echo " La alumna" . "," . $name . "\n";
    }

    function getAll()
    {
        return ' name= '  . $this->name . ' surname= ' . $this->surname . ' age= ' . $this->getAge() . 'id= '  . $this->getId() . "\n";
    }
    // ejercicio 6  Hacer un override del metodo saludar
    function greet()
    {
        echo "Hola! Bienvenido:" . " $this->name " . "$this->surname" . "\n";
    }

    function eat()
    {
        echo "Voy a comer a las 14h";
    }
}

// ejerc. 8 Si creamos una nueva clase persona para subclases diferentes que no sean las ya creadas, si tendria sentido hacer otra clase persona

class teacher extends person
{

    function getAll()
    {
        return ' name= '  . $this->name . ' surname= ' . $this->surname . ' age= ' . $this->age . 'id= '  . $this->id;
    }
}

echo "Pertenece a la edicion:" . student::$numAlumnos . "\n";
$estudiante1 = new student("Marta", "Lopez", 25, "Edicion1");
echo "Pertenece a la edicion:" . student::$numAlumnos . "\n";
$estudiante2 = new student("Maria", "Lopez", 27, "Edicion2");
echo "Pertenece a la edicion:" . student::$numAlumnos . "\n";
$estudiante3 = new student("Stefania", "Lopez", 29, "Edicion3");
echo "Pertenece a la edicion:" . student::$numAlumnos . "\n";


$yo = new person("Luna", "Lopez", 25, 2);
echo $yo->eat();
echo $yo->Greet();

$estudiante = new student("Martin", "Alvarez", 29, 3);
echo $estudiante->name . ',' . $estudiante->surname . ',' . $estudiante->getAge() . ',' . $estudiante->getId();
echo $estudiante->getAll();
echo $estudiante->greet(); 


/* $Profesor = new teacher('Mario', 'Perez', 42, 5);
echo $Profesor->name . "\n" . $Profesor->surname . "\n" . $Profesor->getAge() . ',' . $Profesor->getId();
echo $Profesor->getAll(); */
