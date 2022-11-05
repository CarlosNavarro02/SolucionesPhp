<?php 
$valor1 = 0;
$valor2 = 1;
//Mostramos el primer número de la serie de Fibonacci
echo $valor1 . '<br>';
//Realizaremos 10 sucesiones de la secuencia de Fibonacci por medio de un bucle
for ($i=0; $i < 10; $i++) {  
    //Variable 'sum' para almacenar el número de la primera variable
    $sum = $valor1;
    //La primera variable pasa a contener el valor de la segunda
    $valor1 = $valor2;
    //Sumamos el valor de la sum y la valor 1
    $valor2 = $sum + $valor1;
    //Imprimimos el resultado
    echo $valor1 . '<br>';
}