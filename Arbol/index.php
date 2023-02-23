<?php
    echo "<h1>Árbol impreso con asteriscos con for </h1>"; 
    $filas = 10;                                #Veces que va a ingresar al bucle

    for ($i=1; $i <=$filas ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
          echo "*";
        }
        echo "<br>";
    }

?>