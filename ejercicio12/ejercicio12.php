<?php
    //Este if contendra un isset que determina si una variable está definida y no es null,
    //y por parametro tendra el array asociativo GET que le pasaremos el nombre del submit.
    if (isset($_GET["envio"])) {
         //con el metodo empty determinaremos si una variable está vacía Declaramos  una variable 
        //donde le daremos el nombre que hayamos recogido con el GET llamaremos a 'nombre'
        if (!empty($_GET["nombre"])) {
            //Lo recoge con un GET y después lo imprimimos  por pantalla.
            $nombre = $_GET['nombre'];
            echo 'El nombre introducido es: ' . $nombre;
        } else {

            //Si no se ha introducido ningún nombre, se redirige al la página principal, con el parametro header() 
            // que es usado para enviar encabezados HTTP sin formato con la localizacion otra pagina principal pero con el mensaje de error 
            header('Location: ejercicio12error.html');
        }
    }