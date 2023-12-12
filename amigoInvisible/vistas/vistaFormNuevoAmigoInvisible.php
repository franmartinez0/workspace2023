<?php

namespace amigoInvisible\Vistas;

class vistaFormNuevoAmigoInvisible
{

  public static function render()
  {

    include "cabeceraPrincipal.php";

    echo "<div class='container'>";
?>

    <h3>Nuevo Amigo Invisible</h3>
    <form class="w-75" action="index.php" method="post">
      <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Estado</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="estado" name="estado">
        </div>
      </div>


      <div class="mb-3 row">
        <label for="pista" class="col-sm-2 col-form-label">Precio Máximo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maximoDinero" name="maximoDinero" min="1" max="9999">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="pista" class="col-sm-2 col-form-label">Fecha Máxima</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fechaTope" name="fechaTope">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Lugar</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lugar" name="lugar">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Observaciones</label>
        <div class="col-sm-10">
          <input type="textarea" class="form-control" id="observaciones" name="observaciones">
        </div>
      </div>





      <div class="mb-3 row w-25 float-end">
        <button class='btn btn-success' type="submit" name="accion" value="recibirFormNuevoAmigoInvisible">Crear</button>
      </div>
    </form>


<?php
    echo "</div>";

    include "piePrincipal.php";
  }
}
