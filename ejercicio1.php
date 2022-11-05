<?php
    //Damos valor a las variables de nuestros datos
    $nombre = "Carlos";
    $apellido = "Navarro";
    $edad = 20;
    $tel = "634476011";
    $correo = "carlos.navarro1793@gmail.com";

    //Imprimimos por pantalla los valores de nuestras variables.
    echo "<h1>Datos personales</h1>";
    echo 'Nombre: ' . $nombre . '<br>'; //Con puntos , un echo y comillas simples
    print 'Apellido: ' . $apellido . '<br>'; //Con puntos y un print
    echo  "Edad: ". $edad . "<br>"; //Comillas dobles
    echo "Teléfono: " . $tel . "<br>";
    echo "Email: " . $correo . "<br>";

