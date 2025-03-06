<html>
    <head>
        <title>Ejemplo de PHP con el SWITCH</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplo con estructura Switch</h1>
        <hr>
        La sentencia switch es equivalente a una construcción if...elseif... en las que las expresiones son comparaciones
        de igualdad de la misma expresión con valores distintos<br>
        El uso de la estructura switch facilita la ejecución de diferentes bloques de código 
        egún el valor de una variable, permitiendo manejar múltiples casos de manera más clara y eficiente.<br>
        <hr>
        <h2>Código</h2>
        <img src="Switch.png" width="400" height="250">
        <hr>
        <h2>Resultado</h2>
        <?php
          $posición="arriba";
          switch($posición)
          {
            case "arriba"://Bloque 1
                echo "La variable contiene ";
                echo "el valor arriba";
                break;
            case "abajo": //Bloque 2
                echo "La variable contiene";
                echo "el valor abajo";
                break;
            default : //Bloque 3
                 echo "La variable contiene otro valor";
                 echo "distinto de arriba y abajo";
          }
        ?>
        <hr>
        En el ejemplo anterior empezamos declarando la variables $posición con el valor "arriba", luego utilizamos el switch para evaluar
        el valor de la variable,en la condición o caso "arriba" imprimirá dos echos con el texto "La varaible contiene" y "el valor arriba"
        finalizamos el bloque con el comando break, en el caso "abajo" hará algo similar que el anterior solo que imprimirá lo siguiente "La variables contiene" y
        "el valor abajo" esto lo haria si el valor de la variable sea abajo, por ultimo el default no servira para que cuando el valor de la variable
        no sea ni arriba ni abajo imprima lo siguiente "La variable contiene otro valor" y "disitnto de arriba y abajo", cabe aclarar que cada bloque se finaliza con break,
        como en este caso el valor de la variable es arriba, ejecutara el bloque o caso "arriba".
    </body>
</html>