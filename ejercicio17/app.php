<?php

class App
{
  //Este es un constructor con los datos personales donde definimos los atributos
  public function __construct($nombre = "Ejercicio 17")
  {
    $this->nombre = $nombre;
    $this->materia = "Desarrollo Web  Entorno Servidor";
    $this->profesor = "Enrique";
    $this->alumno = "Carlos Navarro";
  }

  //Inpresion por pantalla
  public function index()
  {
    echo "INDEX<br>";
    echo "Esto es el  $this->nombre<br>";
    echo "Mi nombre es $this->alumno<br>";
    echo "Materia de  $this->materia con  $this->profesor<br>";
  }

  // Esta funcion realiza una sucesion fibonnaci una funcion realizada en anteriores ejercicios
  public function fibonnaci(){
    $num1 = 0;
    $num2 = 1;
    $suma = 1;
    echo "0";
    do {

      echo "<br>";
      $suma = $num1 + $num2;
      $num1 = $num2;
      $num2 = $suma;
      print $suma;
      //el bucle acaba cuando llega al la cifra determinada
    } while ($suma < 1000000);
  }

public function factorial(){
    $num = 9;  
    $factorial = 1; 
    for ($i=$num; $i>=1; $i--)   
    {  
     $factorial = $factorial * $i; 
     echo ' ' . $factorial; 
    }  
}
public function primo(){
    //El bucle recorre del 1 al 10000
    for($i = 1; $i < 10000; $i++){
        $contador = 0;
        //Realizamos otro bucle donde vaya del 1 a $i que sera nuestra variable donde cogemos los números que queremos comprobar
        for($j = 1; $j <= $i; $j++){
            //esta condicion nos servirá para contar los divisores que tiene cada número.
            if($i % $j === 0){
               $contador++;
            }
        }
        //Si el contador es igual a 2, querrá decir que el número es primo, por lo que lo mostraremos por pantalla.
        if($contador == 2){
            echo '  ' .$i .',';
        }
    }
    
}
public function potencia(){
    //declaramos una variable para sacar sus potencias. En este caso su valor será el 2
    $num = 2;
    //Recorre un  bucle del 1 al 24.
    for($i = 1; $i <= 24; $i++){
        //La funcion 'pow' Devuelve el valor de base elevado a la potencia exp.
        $numero_elevado = pow($num, $i);

        echo $numero_elevado . ' ,';
    }
}
}
