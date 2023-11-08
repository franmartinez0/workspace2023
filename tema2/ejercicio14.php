<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>

<h2>esto es una prueba nada mas</h2>
    <?php


    $notas = array(
        array("nombre" => "simo","materia" => "servidor","nota"=>"5"),
        array("nombre" => "juan","materia" => "despliegue","nota"=>"4"),
        array("nombre" => "pepe","materia" => "cliente","nota"=>"9"),
        array("nombre" => "fran","materia" => "cliente","nota"=>"7"),
        array("nombre" => "miguel","materia" => "lico","nota"=>"6"),           
        );

             
   array_multisort(array_column($notas,"nombre"),SORT_DESC,array_column($notas,"nota"),$notas);
    
    

    foreach($notas as $valor) {
        echo $valor["nombre"]." - ".$valor["materia"]." - ".$valor["nota"]."<br>";
    }

    echo array_sum(array_column($notas,"nota")) / count($notas);

    function suspenso($nota) {
        return $nota<5;
    }
    echo "<br>";
    echo count(array_filter(array_column($notas,"nota"),"suspenso"));



    ?>
</body>
</html>