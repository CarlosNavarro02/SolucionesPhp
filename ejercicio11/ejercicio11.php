<?php
    //Este if contendra un isset que determina si una variable está definida y no es null,
    //y por parametro tendra el array asociativo GET que le pasaremos el nombre del submit.
    if (isset($_GET["envio"])) {
        //con el metodo empty determinaremos si una variable está vacía Declaramos  una variable 
        //donde le daremos el nombre que hayamos recogido con el GET y lo repetiremos en todos los campos(autor,titulo,editorial,etc). 
        if (!empty($_GET["titulo"])) {
            $titulo = $_GET["titulo"];//Asi podremos mostrar por pantalla lo que el usuario ha introducido por teclado.
            echo "<br>Titulo introducido: " . $titulo;
        } //Si no cumple entrara en este else donde muestra un mensaje.
        else { 
            echo "<br><h3>No has introducido ningun título.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["autor"])) {
            $autor = $_GET["autor"];
            echo "<br>Autor introducido: " . $autor;
        } else {
            echo "<br><h3>No has introducido ningun autor.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["editorial"])) {
            $editorial = $_GET["editorial"];
            echo "<br>Editorial introducido: " . $editorial;
        } else {
            echo "<br><h3>No has introducido ninguna editorial.</h3>";
        }
    }
    if (isset($_GET["envio"])) {
        if (!empty($_GET["paginas"])) {
            $paginas = $_GET["paginas"];
            echo "<br>Paginas introducidas: " . $paginas;
        } else {
            echo "<br><h3>No has introducido ninguna página.</h3>";
        }
    }