<html>
    <head>
        <title>Ejemplo de PHP para el ciclo While</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
      <h1>Ejemplo con Bucles con el Ciclo While</h1>
      <hr>
      Los bucles (o ciclos) en PHP son estructuras de control que permiten ejecutar un bloque 
      de código repetidamente mientras se cumple una condición específica.<br>
      Con While la expresión se evalúa al principio de cada iteración: si el resultado es TRUE se ejecuta el bloque de sentencias
      ;si el resultado es FALSE el bucle se termina.
      <hr>
      <h2>Código</h2>
        <img src="While.png" width="400" height="250">
        <hr>
        <h2>Resultado</h2>
        Inicio<BR>
        <?php
          $i = 0;
          While($i<10)
          {
            Echo"El valor de i es ", $i,"<br>";
            $i++;
          }
        ?>
        Final<BR>
        <hr>
        En el ejemplo anterior comenzamos definiendo la variables $i con el valor 0, luego se utiliza el bucle while para repetir
        un bloque de código mientras la condición sea verdadera, la condición es que $i sea menor que 10 .<br>
        El código dentro del bucle imprime el texto con el echo que dice "El valor  de i es " seguido  del valor actual  de $i y un salto de linea.<br>
        Después de haber imprimido el valor , el código incrementa  a $i +1  usando uno de los operadores visto anteriormente de incremento ($i++)<br>
        El bucle se repite, y la condición se evalúa nuavamente. Esto continua hasta que la variable ya no sea menor que 10.

        
    </body>
</html>