<?php
    //Este if contendra un isset que determina si una variable está definida y no es null,
    //y por parametro tendra el array asociativo GET que le pasaremos el nombre de 'nombre[]'.
    if (isset($_GET['nombres'])) {
        //Recorre el array de los nombres
      echo "Nombres<br><br>";
      foreach($_GET['nombres'] as $nombre) {
        //creamos un input con los 3 valores
        echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
      }
    }
