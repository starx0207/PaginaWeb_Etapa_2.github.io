<html>
    <head>
        <title>Ejemplo de PHP</title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplo con Operadores Lógicos</h1>
        <hr>
        <h2>Código</h2>
        <img src="Logico.png" width="500" height="250">
        <hr>
        <h2>Resultado</h2>
        <p>
        <?php
          $a = 8;
          $b = 8;
          $c = 10;
          echo ($a == $b) && ($c > $b), "<br>";
          echo ($a == $b) || ($b == $c), "<br>";
          echo !($b <= $c), "<br>";
        ?>
        </p>
        <hr>
        En el ejemplo anterior lo que se hizo en el código fue que se declararon 3 varias $a,$b y $c, despues para imprimen los 
        resultados en cada sentencia si es verdadero o falsa, en el primer echo  utiliza el operador And (y) que significa que 
        si tanto la condición A como la condición B son true la sentencia marcará verdadero (1) por lo contrario no marca nada, 
        en el segundo se utiliza un operador Or (o inclusivo) que significa que si cualquiera de las condiciones
        es verdadero la sentencia es verdadero en este caso la condicion A es verdadero osea que la sentencia imprimirá verdadero 
        (1) y por ultimo el tercero utiliza un operador Not(no) que significa que si la condicion que le de es verdadero imprimira 
        que es falso (no marca nada).
    </body>
</html>
