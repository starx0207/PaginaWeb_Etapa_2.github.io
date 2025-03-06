<html>
    <head>
        <title> Ejemplo de operadores de comparación en PHP </title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplos con Operadores de Comparación</h1><br>
        Los operadores de comparación, como su nombre lo indica, permiten comparar dos valores.
        <hr>
        <h2>Código</h2>
        <img src="Comparacion.png" width="400" height="350">
        <hr>
        <h2>Resultado</h2>
        <?php
          $a = 8;
          $b = 3;
          $c = 3;
          echo $a == $b, "<br>";
          echo $a != $b, "<br>";
          echo $a < $b, "<br>";
          echo $a > $b, "<br>";
        ?>
        <hr>
        En el ejemplo anterior se declararon 3 variables pero solo se usaron dos , luego se de declararon las impresiones de
        los resultados obtenidos de la comparación, fueron cuatro operaciones de comparación que son las siguiente: Igual,
        Diferente, menor que y mayor que. Si aparece 1 la condición es verdadera, si no aparece nada es falso.
    </body>
</html>