<?php
// Ejercicio 1
/*  $a= 12;
$b= 23;
 echo $a+$b."\n";
echo $a-$b."\n";
echo $a/$b."\n";
echo $a%$b."\n";  

// ejercicio 2

$x=["Coco","Fresa","Manzana","Mango","Platanos"];
 echo $x[3]; 

// Ejercicio 3
 $c= ["Coco","Fresa","pepino",["Manzana","Mango", "Peras",["pepito", "grillo",35,"Platanos","tomates"]]];

 echo $c[3][3][4];  

// eje.4 crear programa que cuente del 1 a 10

 for ($i=0; $i <= 10; $i++) { 
     echo($i); 
} 

// eje.5 crear programa que sume los primeros 10 numeros
 $suma=0;
for ($i=0; $i <= 10; $i++) { 
    $suma+=$i;
     echo($suma)."\n"; 

} 

// ejer.6  imprimir numero random

 echo rand(0,50); 

// ejercicio 7 Encapsular los ejercicios 5y6 en funciones

 function sumarNumeros($suma){
  $sumaN=$suma;
  for ($i=0; $i <= 10 ; $i++) { 
  $sumaN+=$i;
  echo $sumaN."\n";
  };

}
sumarNumeros(0); 

 function random($min,$max){
  echo rand($min,$max);
}
  random(0,20);  

  // funcion para sumar 2 numeros

   function sumarDosNumeros(){
    $a=5;
    $b=10;
    $suma= $a+$b;
    echo $suma."\n";
  }
  sumarDosNumeros();
  function sumarDosNumerosP($num1,$num2){
    $a=$num1;
    $b=$num2;
    $suma= $a+$b;
    echo $suma;
  }
  sumarDosNumerosP(10,12); 

  ejer.8 Crear una función que imprima X valores random en el intervarlo 0 - X. 

 function numeroRandom($x){

  for ($i=0; $i < $x ; $i++) {
    echo rand(0,$x)."\n";
      
   }
}
numeroRandom(10); 

 

// ejer. 9 Crear funcion que imprima solo los valores pares dado un numero

function numPar(){
  for ($i=0; $i <= 13 ; $i+=2) { 
   echo $i."\n";
  }
}
numPar(); */

// ejer. 10 Crear funcion que imprima solo los valores impares dado un numero

/* function numImpar(){
  for ($i=1; $i <=13 ; $i+=2) { 
   echo($i)."\n";
  }
}
numImpar(); */
/* Considerando las funciones de antes (pares e impares), crear
una función que tenga como limite un numero dado n y como
segundo parámetro un valor booleano que: si es true imprime
los pares y si es false imprime los impares. */

/* $bandera=false;
function limite($n,$estado){
if ($bandera=$estado) {
 for ($i=0; $i <= $n ; $i+=2) { 
  echo $i."\n";
 }
}else{
  for ($i=1; $i <= $n ; $i+=2) { 
    echo $i."\n";
  }
}

}
limite(15,$bandera); */

// ejercicio 12 recrear ejercicio de password
/* $pass=readline("Introduce tu contrasena");
function caracteres($pass){
if (strlen($pass)>=8) {
  return true;
 
}else{
  return false;
}
}
function contieneNumero($pass){
  for ($i=0; $i < strlen($pass) ; $i++) { 
    if (is_numeric($i)) {
      return true;
    }else{
      return false;
    }
  }
  
}
function contieneMayuscula($pass){
  return ctype_upper($pass);
}
// funcion que recoja todo lo que hemos echo hasta el momento
function comprueba($pass){
  $caracteres = $caracteres($pass);
  $contieneNumero = $contieneNumeros($pass);
  $contieneMayuscula = $contieneMayuscula($pass);
  if ($caracteres== true && $contieneNumero == true && $contieneMayuscula == true ) {
   echo "contrasena correcta";
  }else{
    echo "contrasena incorrecta";
  }
}
comprueba($pass); */

// ejercicio 13

/* Crear una función que dado una cartera y un array de productos con
(nombre y precio) devuelva un array (misma estructura) con solo los
productos que se han podido comprar. Ejemplo textual:
cartera: 7
Productos disponibles:
pan, 2
papas, 1
cocacola,3
agua, 2 */

/* $cartera = 7;

$productos[
   ["Pan", 2],
   ["Papas", 1],
   ["Cocacola",3],
   ["agua",2], 
];

function shopping($productos, $cartera){
    $cesta=[];
    $resta=$cartera;
    while($resta  >  1) {
      for ($i=0; $i < count($productos); $i++){
        if( $productos[$i][1] < $resta) {
            
        }
      }
  
         

              

}
 */




?>