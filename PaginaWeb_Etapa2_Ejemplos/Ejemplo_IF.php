<html>
    <head>
        <title>Ejemplo de PHP con el IF</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplo con Estrucutura Condicional IF</h1>
        Las condicones if, else y elseif permiten condicionar la ejecución de un bloque de sentencia al cumplimiento de una
        condición<br>
        La expresión  se evalúa siempre, si el resultado es True se ejecuta el bloque de sentancias y si el resultado es FALSE
        no se ejecuta el bloque de sentencias<br>
        <hr>
        <h2>Código</h2>
        <img src="If.png" width="400" height="250">
        <hr>
        <h2>Resultado</h2>
    
    
        <?php
          $a = 8;
          $b = 3;
          If($a < $b)
          {
            echo "a es menor que b";
          }
          else{
            echo "a NO es menor que b";
          }
        ?>
        <hr>
        En el ejemplo anterior se declararon 2 variables $a y $b con los valores de 8 y 3, despues utiliza el if para emepezar con 
        la condición de que si A es mayor que B si es el caso, se  debe imprimir con el echo "a es menor que b" como en este caso 8 es 
        es mayor que 3 se ejecutara el bloque de comando else que imprimirá tambien con el echo "a NO es menor que b".
    </body>
</html>