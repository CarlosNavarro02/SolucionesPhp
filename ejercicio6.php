<?php
    //Definimos un array
    $equipo = ["Carlos","Lucy", "Yasaris", "Angela", "Steven"]; // Declaramos un array.
    //Enseñamos por pantalla el array, el valor por pantalla sera acompañado por la posicion de cada una
    print_r($equipo);
    echo "<br>";

    //Recorremos todo el array con un Foreach
    //Dentro de ella las meteremos en una lista no ordenada 
    echo '<ul>';
    foreach ($equipo as $equipos){
        echo '<li>' . $equipos . '</li>';
    } 
    echo '</ul>';