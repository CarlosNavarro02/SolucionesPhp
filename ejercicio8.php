<?php
    //Creamos un array vacío en donde meteremos todo el array para ser uno solo.
    $equipo[] = '';
    //Vamos introduciendo uno por uno la posicion con los valores
    $equipo[0] = 'Carlos';
    $equipo[1] = 'Lucy';
    $equipo[2] = 'Yasaris';
    $equipo[3] = 'Angela';
    $equipo[4] = 'Steven';

    //Recorremos el array con un foreach y mostramos sus valores por pantalla con un echo. 
    //Con las etiquetas que hemos escrito nos creara una lista.
    echo "<h3>Equipo</h3>";
    echo '<ul>';
    foreach ($equipo as $equipos){
        echo '<li>' . $equipos . '</li>';
    } 
    echo '</ul>';