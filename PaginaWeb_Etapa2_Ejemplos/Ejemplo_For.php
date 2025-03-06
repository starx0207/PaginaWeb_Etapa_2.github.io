<html>
    <head>
        <title>Ejemplo de PHP con el ciclo For</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
      <h1>Ejemplo con Bucles con el Ciclo For</h1>
      Con este bucle la expresión inicial se evalúa siempre. La expresión final se evalúa al principio de cada 
      iteración: si el resultado es TRUE se ejecuta el bloque de sentencias y la expresión de paso y se evalúa nuevamente
      la expresión final; si el resultado es FALSE el bucle se termina.<br>
      Cuando se programa un ciclo FOR hay que tener cuidado en que la expresión final vaya a cumplirse en algún momento, por que si no es así, el bucle
      no terminaría nunca.<br>
      <hr>
      <h2>Código</h2>
        <img src="For.png" width="600" height="250">
        <hr>
        <h2>Resultado</h2>
        Inicio<BR>
        <?php
          for ($i = 0; $i<10; $i++)
          {
            echo "El valor de i es ", $i, "<br>";
          }
        ?>
        Final<BR>
        <hr>
        En el ejemplo anterior iniciamos dandole valor ala variable $i el valor 0<br>
        Como podemos observar en el código dentro del for el bucle se ejecutará mientras $i sea menor que 10.<br>
        Después de cada iteración, el valor de $i se incrementa en 1 utilizando el operador de incremento ($i++).<br>
        Dentro del bloque de código del bucle, se utiliza echo para imprimir el texto "El valor de i es " seguido del valor actual de $i y un salto de línea HTML<br>
    </body>
</html>