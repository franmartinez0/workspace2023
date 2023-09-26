<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio</title>
</head>
<body>
    <?php

    $tablaMultiplicar=array(1,2,3,4,5);



    for($i=0;$i<count($tablaMultiplicar);$i++){
        for($j=0;$j<=10;$j++){
            echo($tablaMultiplicar[$i]." x ".$j." = ".
            ($j*$tablaMultiplicar[$i]));
            echo"<br/>";
        }
        echo"<br/>";
    }


    ?>
</body>
</html>