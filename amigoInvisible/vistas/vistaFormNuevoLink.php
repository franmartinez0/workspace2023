<?php

namespace amigoInvisible\Vistas;

class vistaFormNuevoLink
{

    public static function render($id)
    {

        include "cabeceraPrincipal.php";

        echo "<div class='container'>";
?>



        <h3>Nuevo Enlace</h3>
        <form class="w-75" action="index.php" method="post">
            <div class="mb-3 row">
                <label for="modelo" class="col-sm-2 col-form-label">Nombre del enlace</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombreUrl" name="nombreUrl" require>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="pista" class="col-sm-2 col-form-label">Enlace</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" require>
                </div>
            </div>
            <input type="hidden" name="idRegalo" value="<?= $id ?>">

            <div class="mb-3 row w-25 float-end">
                <button class='btn btn-success' type="submit" name="accion" value="recibirFormNuevoLink">Crear</button>
            </div>
        </form>


<?php


        echo "</div>";

        include "piePrincipal.php";
    }
}
