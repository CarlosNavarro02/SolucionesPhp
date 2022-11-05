<?php
    //Este if contendra un isset que determina si una variable está definida y no es null,
    //y por parametro tendra el array asociativo GET que le pasaremos el nombre del submit.
    if (isset($_GET["envio"])) {
        //Comprueba que los dos valores esten definidas
        if(isset($_GET['numero1']) && isset($_GET['var2'])){
        //Recoge el valor que se ha introducido por el html de los 2 numero
        $numero1=$_GET['numero1'];
        $numero2=$_GET['var2'];
        //Definie 4 variablees que le pasaremos el primer numero y segundo proporcionado por pantalla
        // y colocamos las operaciones
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $mult = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        //Este if comprueba que se ha seleccionado una opción de operador.
        if (!empty($_GET['menusm'])) {
            $operador = $_GET['menusm'];
            //Recorre el menu por medio de un foreach ya que previamente lo definimos como un array
            foreach ($operador as $operadores) {
                if($operadores == 'suma'){
                    echo 'Suma entre  '. $numero1 . ' y ' . $numero2 . ' es :' .$suma ;
                }else if($operadores == 'resta'){
                    echo 'Resta entre  '. $numero1 . ' y ' . $numero2 . ' es :' .$resta ;
                }else if($operadores == 'multiplicacion'){
                    echo 'La multiplicacion entre  '. $numero1 . ' y ' . $numero2 . ' es :' .$mult ;
                }else if($operadores == 'division'){
                    echo 'La division entre  '. $numero1 . ' y ' . $numero2 . ' es :' .$division ;
                }
            }
        } else {//mensaje de vacio
            echo "<br>No has introducido la operacion.";
        }
        }   
    }
    ?>