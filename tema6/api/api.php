<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class='container'>

        <h3 class='mb-3'>Valorant</h3>

        <div class='row'>
    
<?php

//echo $resultado;
$uri = "https://valorant-api.com/v1/agents?language=es-ES";       
$reqPrefs['http']['method'] = 'GET';
$reqPrefs['http']['header'] = '';
$stream_context = stream_context_create($reqPrefs);
$resultado = file_get_contents($uri, false, $stream_context);




//Pasar de json a objeto php y recorrer los resultados
if ($resultado != false) {
    $respPHP = json_decode($resultado);

    foreach($respPHP->data as $agente) {
        echo "
        <div class='card' style='width: 18rem ;'>
            <img src='{$agente->fullPortrait}' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>{$agente->displayName}</h5>

                <p class='card-text'>{$agente->description}</p>
                
                
                <p class='card-text'><a href='ValorantDetalle.php?url=https://valorant-api.com/v1/agents/{$agente->uuid}/?language=es-ES.'>Habilidades</a></p>
            </div>
        </div>
        ";


    }
}
?>
        

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>