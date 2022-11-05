<?php
 $num = 3;
 echo "<h3>Divisores de 3 (1 al 10) :</h3> <br>";
 //Para este ejercicio definiremos 2 bucles
 //El primer bucle sera para recorrer desde el 1 al 10
 for($i = 1; $i <= 10; $i++){
     //El segundo bucle lo realizamos para cumplir con el enunciado que pide los numeros 
     //divisible para 3 lo defimos con el simbolo de '%'
     if($i % 3 == 0){
         echo " " . $i . "<br>";
     }
 }