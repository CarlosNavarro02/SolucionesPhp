<?php
 //Definimos una constante con 169 o 193 por en el enunciado del ejercicio.
 const valor1 = 169;
 $contador = 0;
 //Este bucle empezará desde el dos y acabara por el valor dado por la constante
 for($i = 2; $i < valor1; $i++){
     //Si al dividir la constante por alguno de los números del bucle de resto da 0 entrara en el siguiente if.
     if(valor1 % $i == 0){
         echo "Numero de primos: " . $i; //Muestra los divisores de la constante.
         $contador++; //Aumentara el contador dependiendo el numero
     }
 }
 //Si el contador es igual a 0 , el numero sera primo.
 if($contador == 0){
     echo "El numero " . valor1 . " es primo.";
 }