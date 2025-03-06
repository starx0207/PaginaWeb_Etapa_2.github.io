<html>
    <head>
        <title>Ejemplo de PHP para el ciclo Do While</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
     <body>
       <h1>Ejemplo con Bucles con el Ciclo While</h1>
       <hr>
       El ciclo do while es muy similar al bucle while, la principal diferencia es que en el bucle do whileel bloque de sentencias
       se ejecuta por lo menos una vez mientras que en el bucle while depende de si la expresión es cierta o no la primera vez
       que se evalúa.
       <hr>
       <h2>Código</h2>
        <img src="While.png" width="400" height="250">
        <hr>
        <h2>Resultado</h2>
        Inicio<BR>
        <?php
          $i=0;
          Do{
            Echo "El valor de i es", $i,"<br>";
            $i++;
          }While($i<5)
        ?>
        Final<BR>
        <hr>
        En el ejemplo anterior empezamos definiendo la variable $i y asignandole el valor 0.<br>
        Luego se utiliza  un bucle do-while  para repetir un bloque de código  mientras la condición sea verdadera<br>
        El código dentro del bucle do  se ejecuta primero, antes de que se  evalúe la condición.Este bloque asegura que el código se ejecute al menos una vez, independientemente de la condición.<br>
        El código imprime el texto con el echo poniendo lo siguiente "El valor de i es" seguido del valor actual de $i y un salto de línea<br>
        Después de ejecutar el bloque do, se evalúa la condición del while<br>
        El bucle continúa ejecutándose mientras $i sea menor que 5<br>

    </body>
</html>