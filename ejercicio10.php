<?php

echo "<h3>Equipo :</h3>";

//declarar un array con la valores en la posición y en el elemento.

$equipo = array (
    'base' => 'Carlos',
    'escolta' => 'Lucy',
    'alero' => 'Yasaris',
    'alapivot' => 'Angela',
    'pivot' => 'Steven'
);

//LO tendreos que recorrer con un ForEach pero con clave valor 
//donde la posicion sera la clave y los nombre el valor

foreach ($equipo as $equipos=>$posicion){
    echo $equipos . ": " . $posicion . '<br>';
}