<html>
    <head>
        <title>Ejemplo de PHP con el ciclo For Each</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
      <h1>Ejemplo con Bucles con el Ciclo For Each</h1>
      El ciclo foreach es muy útil para recorrer matrices cuyo tamaño se desconoce o matrices cuyos índices no son correlativos o numéricos (matrices asociativas)<br>
      El ciclo ejecuta el bloque de sentencias tantas veces como elementos contenga la matriz ($matriz) y en cada iteración, la variable $valor toma uno de los valores de la matriz.<br>
      <hr>
      <h2>Código</h2>
        <img src="ForEach.png" width="600" height="250">
        <hr>
        <h2>Resultado</h2>
        
        <?php
          $matriz = array(0, 1, 10, 100, 1000);
          foreach ($matriz as $valor){
            print "<p>$valor</p>\n";
          }
        ?>
        
        <hr>
       Como vimos en el código del ejemplo anterior<br>
       Comenzamos definiendo un array llamado $matriz  con los valores 0, 10, 100, 1000.<br>
       Después se utiliza el bucle foreach para iterar  sobre  cada elemento del array,
       en cada iteración del bucle, el valor actual del array se asigna a la variable $valor.<br>
       Por último dentro del bloque de código del bucle, se utiliza print para imprimir el valor actual de $valor, envuelto en etiquetas de párrafo HTML (<p>) y seguido de un carácter de nueva línea (\n).<br>
       
    </body>
</html>