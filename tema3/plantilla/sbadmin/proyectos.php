<?php
session_start();

?>
<?php
include("index.php");
?>


<?php

//escribimos nosotros unos proyectos para que siempre nos aparezcan

$proyectos = array(
    [
        "id" => 0, "nombre" => "Proyecto laravel", "fechaini" => "23/5/2023", "fechafin" => "19/8/2023", "porcentaje" => 40,
        "importancia" => 5
    ],
    [
        "id" => 1, "nombre" => "Proyecto Java", "fechaini" => "29/6/2023", "fechafin" => "18/7/2023","porcentaje" => 90,
        "importancia" => 2
    ],
    [
        "id" => 2, "nombre" => "Arduino meteorología", "fechaini" => "1/8/2023", "fechafin" => "20/8/2023","porcentaje" => 98,
        "importancia" => 3
    ],
    [
        "id" => 3, "nombre" => "Base de datos", "fechaini" => "6/9/2023", "fechafin" => "8/10/2023","porcentaje" => 90,
        "importancia" => 2
    ],
    [
        "id" => 4, "nombre" => "intranet", "fechaini" => "1/11/2023", "fechafin" => "5/11/2023", "porcentaje" => 90,
        "importancia" => 3
    ],
    [
        "id" => 5, "nombre" => "Web marketplace", "fechaini" => "3/3/2023", "fechafin" => "29/3/2023", "porcentaje" => 20,
        "importancia" => 3
    ],
    [
        "id" => 6, "nombre" => "lector de huellas", "fechaini" => "28/5/2023", "fechafin" => "2/12/2023", "porcentaje" => 85,
        "importancia" => 4
    ],
);


//añadimos los datos del array a la sesion 

if (!isset($_SESSION['proyectos']))
    $_SESSION['proyectos'] = $proyectos;

echo '<div class="card-body">';
echo '<div class="table-responsive" >';
echo '<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">';

echo "<thead>";
echo "<tr>";
echo "<td>" . "NOMBRE" . "</td>";
echo "<td>" . "FECHA INICIO" . "</td>";
echo "<td>" . "FECHA FINAL" . "</td>";
echo "<td>" . "PORCENTAJE COMPLETADO" . "</td>";
echo "<td>" . "IMPORTANCIA" . "</td>";
echo "</thead>";



//con el foreach pintamos cada proyecto
echo "<tbody>";
foreach ($_SESSION['proyectos'] as $valor) {
    echo "<tr>";
    echo "<td>" . $valor["nombre"] . "</td>";
    echo "<td>" . $valor["fechaini"] . "</td>";
    echo "<td>" . $valor["fechafin"] . "</td>";
    echo "<td>" . $valor["porcentaje"] . "%</td>";
    echo "<td>" . $valor["importancia"] . "/5</td>";


    //añadimos el boton de borrar para poder eliminar por id
    echo"<td><a href='controlador.php?accion=borrarId&id=". $valor['id'] ."'
    type='botton' name='borrarid' class='btn btn-info'>Borrar
    </a></td>";
    echo"<td><a href='controlador.php?accion=informacion&id=". $valor['id'] ."'
    type='botton' name='informacion' class='btn btn-light'>Info
    </button></td>";
    echo "</tr>";
}
echo "<tbody>";
echo '</table>';









include("pie.php");