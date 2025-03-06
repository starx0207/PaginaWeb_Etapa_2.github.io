<html>
<head>
    <title>Ejemplo de PHP</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>
    <h1>Ejemplo Con Variables en php</h1>
    <hr>
    <p>
    En siguiente ejemplo veremos como se declaran las variables, como ya vimos en semestres pasados las variables nos sirven para
    almacenar información. En php el rpogramador puede dar el nombre que quiera a las variables, con algunas restricciones
    </p>
    -Los nombres de las varaibles tienen que emepzar por el caracter "$".<br>
    -A continuación tiene que haber una letra (mayúscula o minúscula) o un guón bajo. <br>
    -El resto de caracteres del nombre pueden ser números, letras o guiones bajos.
    <hr>
    <h2>Código</h2>
    <img src="variables.png" width="400" height="250">
    <hr>
    <h2>Resultado</h2>
<?php

    $a = 1;
    $b = 3.34;
    $c = "Hola Mundo";
    echo $a,"<br>",$b,"<br>",$c;
?>
   <hr>
   Como vemos este ejemplo se estan declarando tres variables $a,$b y $c con valores de numero enteros, numeros decimales
   y texto. Después estos valores se imprimen con la sentencia echo separadolos todos los valores con el <"br">.
</body>
<html>
        