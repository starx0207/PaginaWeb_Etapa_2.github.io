<html>
    <head>
        <title>Ejemplo de constantes en PHP</title>
    </head>
    <body>
    <?php
       $m = 60;
       const g = 9.8;

       $w = $m * g; 
       echo "La masa es $m, la aceleraciòn de la gravedad es  9.8, entonces el peso es:" , $w,
       "<br>";
          
    ?>
    </body>
</html>