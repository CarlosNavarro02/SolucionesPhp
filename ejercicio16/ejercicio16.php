<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    <!--es una variable superglobal que devuelve el nombre del archivo del script que se está ejecutando actualmente. 
    Envía los datos del formulario enviado a la misma página, en lugar de saltar a una página diferente.-->
    <form name="ejercicio16" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    <label for="nombre">Lista de nombres: </label>
    <input type="text" name="nombre[]" id="nombre">
    <input type = "submit" name="envio" id="envio" value="Enviar">
    <?php
        //Define una list no ordenada.
        echo'<ul>';
            //Este if contendra un isset que determina si una variable está definida y no es null,
            //y por parametro tendra el array asociativo GET que le pasaremos el nombre del submit.
            if(isset($_GET['envio'])){
                //Recorre el array con los nombres previamente pasados por pantalla.
                foreach($_GET['nombre'] as $nombre){
                    //Con este echo vamos guardando nuestros nombres introducidos con una etiqueta hidden al final.
                    echo '<input type="text" name="nombre[]" value = " ' . $nombre . '" hidden>';
                    //Formato de lista.
                    echo '<li> ' . $nombre . '</li>';
                }
            }
        echo '</ul>';  
    ?>
    </form>
</body>
</html>
