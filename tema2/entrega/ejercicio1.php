<?php

include "cabecera.php";
?>

<div class="container">
    <h3>
        Ejercicio 1
        <small class="text-body-secondary">Carro de la compra</small>
    </h3>


    <?php
    $carrito = array(
        array("nombre" => "teclado", "precio" => 150, "imagen" => "/tema2/entrega/img/1.jpg", "iva" => 0, "cantidad" => 1),
        array("nombre" => "raton", "precio" => 53, "imagen" => "/tema2/entrega/img/2.jpg", "iva" => 1, "cantidad" => 3),
        array("nombre" => "monitor", "precio" => 300, "imagen" => "/tema2/entrega/img/3.jpg", "iva" => 0, "cantidad" => 1),
        array("nombre" => "equipo de sonido", "precio" => 150, "imagen" => "/tema2/entrega/img/4.jpg", "iva" => 1, "cantidad" => 1),
        array("nombre" => "alfombrilla", "precio" => 7, "imagen" => "/tema2/entrega/img/5.jpg", "iva" => 1, "cantidad" => 2),
        array("nombre" => "ordenador", "precio" => 800, "imagen" => "/tema2/entrega/img/6.jpg", "iva" => 0, "cantidad" => 1),
        array("nombre" => "pasta termica", "precio" => 5, "imagen" => "/tema2/entrega/img/7.jpg", "iva" => 1, "cantidad" => 1),
    );

    echo "<table class='table'>
        <thead>
          <tr>
            <th scope='col'></th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Precio</th>
            <th scope='col'>Imagen</th>
            <th scope='col'>Cantidad</th>
          </tr>
        </thead>
        <tbody>";

        $indice=1;
        $sinIva=0;
        $conIva=0;

        foreach($carrito as $producto){
            echo'
            <tr>
            <th scope="row">'.$indice++.'</th>
            <td>'.$producto["nombre"].'</td>
            <td>'.$producto["precio"].'</td>
            <td><img src="'.$producto["imagen"].'" class="img-thumbnail" width="80px"></td>
            <td>'.$producto["cantidad"].'</td>
          </tr>
            ';


            $sinIva+=$producto["precio"]*$producto["cantidad"];

            if($producto["iva"]==0){
              $conIva+=($producto["precio"]*1.08)*$producto["cantidad"];
            }else{
              $conIva+=($producto["precio"]*1.21)*$producto["cantidad"];
            }


        }
        echo'</tbody>';

        //abrimos pie de tabla

        echo'<tfoot>';
        echo '    <td scope="col" class="col-8 fw-bold" colspan="3">Total:</td>';
        echo '    <td scope="col" class="col-4" colspan="2"><span class="">IVA incl.: '.$conIva.'€</span><span class="p-3">IVA excl.: '.$sinIva.'€</span></td>';
        echo'</tfoot>';
        echo'</table>';
    ?>


</div>
