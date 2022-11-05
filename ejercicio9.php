<?php
    //Creamos un array vacío en donde meteremos todo el array para ser uno solo.
    $paises[] = '';
    //Vamos introduciendo uno por uno la posicion con los valores
    $paises[0] = 'Ecuador';
    $paises[1] = 'España';
    $paises[2] = 'Afganistan';
    $paises[3] = 'Croacia';

    echo "<h3>Paises del mundo</h3>";
    //Imprimimos por pantalla con la posicion de cada una de ellas.
    print_r($paises);

    //Lo mostramos sin su posición.
    echo'<br>';
    foreach($paises as $pais){
        echo ' ' . $pais;
    }