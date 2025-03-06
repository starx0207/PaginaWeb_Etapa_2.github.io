<html>
    <head>
        <title> Ejemplo de constantes en PHP </title>
        <link rel="stylesheet" href="css/estilos2.css">
    </head>
    <body>
        <h1>Ejemplo con Constantes en PHP</h1>
        Las contantes es un identificador para un valor simple. El valor no puede ser modificado durante el guón.<br>
        A diferencia de las variables, las constantes son automáticamente globales a través de todo el guón.<br>
        <hr>
        <h2>Código</h2>
        <img src="Constantes.png" width="800" height="250">
        <hr>
        <h2>Resultado</h2>
        <p>
        <?php
           $m = 60;
           const g = 9.8;
           $w = $m * g;
           echo "La masa es $m, la aceleración de la gravedad es 9.8, entonces el peso es:", $w,"<br>";
        ?>
        </p>    
        <hr>
        En el ejemplo anterior para calcular el peso de la masa dada declaramos la contante gravitacional (const g) y le 
        pusimos ell valor de 9.8, así despues que hagamos la operaciones para sacar el peso solo declaramos la letra g sin el signo 
        de peso ya que no es una variables, para que al final con echo imprimamos el resultado con la variable $w.
    </body>
</html>