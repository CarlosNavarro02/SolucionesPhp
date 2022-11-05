<?php
//Definimos nuestro array
$paises = ["Ecuador","España", "Afganistan", "Croacia"];

//lo mostramos por pantalla con su posición.
print_r($paises);
//Recorremos el array con un foreach
echo'<br>';
foreach($paises as $pais){
    echo $pais . ' , ';
}