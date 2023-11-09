<?php
namespace RegalosNavidad\vistas;


class vistaLogin{


    public static function render($regalos){
        include "cabecera.php";
        echo'<div class="container">';
        echo"<table class='table table-dark'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>";

        foreach($regalos as $regalo) {
        echo "<tr>";
        echo " <td>".$regalo->getNombre()."</td>";
        echo " <td>".$regalo->getPrecio()."</td>";
        echo " <td>".$regalo->getEstado()."</td>";
        echo " <td>".$regalo->getYear()."</td>";
        echo "<td>";
        echo "<a href='index.php?accion=eliminarResultado&id=".$resultado->getId()."'><button class='btn btn-danger'>X</button>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";

    echo "</div>";

    include "piePrincipal.php";

    }
}



?>