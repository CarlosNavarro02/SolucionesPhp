<?php
    //Definimos un array con 3 nombre que seran los 3 nombres con los que podemos acceder.
    $array = ['Carlos', 'Lucy', 'Yasaris'];
    if (isset($_GET["envio"])) {
            if(isset($_GET['nombre'])){
            $nombre=$_GET['nombre'];
            //Con este if comprobaremos que solo se puedan introducir los nombres de nuestro array.
            //in_array comprueba si un valor existe en un array
            //strlen — Obtiene la longitud de un    string que en el caso de el ejercicio va a ser mayor que 3
            if(in_array($nombre, $array) && strlen($nombre) >= 3){
            print "<h3>Bienvenido :" . $nombre . "</h3>";
            }else{
                echo "<h3>El nombre : " . $nombre . " no es válido.</h3>";
            }
        }
    }