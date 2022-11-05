<?php
 //Declaramos la constante y le damos de valor el 8.
 //La constante hace que el valor no cambie
 const producto = 8;
 //Declaramos un bucle for que recorre del 1 al 10 para multiplicarse por el 8  nuestra constante declarada.
 echo "<h3>Tabla de multiplicar</h3>";
 for($i = 1; $i <= 10; $i++){
    echo " " . $i . "* " . producto . " = " . $i * producto . "<br>"; 
 }