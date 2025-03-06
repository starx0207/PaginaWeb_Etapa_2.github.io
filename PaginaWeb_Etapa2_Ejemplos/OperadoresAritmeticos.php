<html>
    <head>
        <title>Ejemplo de PHP</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplo con Operadores Aritmeticos en PHP</h1><br>
        Un operador es un símbolo matemático que indica que debe ser llevada a cabo una operación especificada sobre un cierto 
        número de operadores.<br>
        En este caso veremos los operadores aritméticos que serían los de negación, adición, sustracción, multiplicación,
        división y módulo<br>
        <hr>
        <h2>Código</h2>
        <img src="Aritmeticos.png" width="400" height="250">
        <hr>
        <h2>Resultado</h2>
        <p>
        <?php
          $a = 8;
          $b = 3;
          echo $a + $b, "<br>";
          echo $a - $b, "<br>";
          echo $a * $b, "<br>";
          echo $a / $b, "<br>";
          $a++;
          echo $a,"<br>";
          $b--;
          echo $b, "<br>";
        ?>
        </p>
        <hr>
        En el ejemplo anterior se declararon dos variables $a=8 y $b=3 y despues se declara que se imprima los resultados
        de las operaciones con operadores, en el primero se hace una suma de a y b, en el segundo se hace la resta, en el 
        tercero se multiplican los valores, en el cuarto  se divide y en los ultimo dos en el caso de $a incrementa un valor y en 
        el caso de $b se decrementa un valor. 
    </body>
</html>