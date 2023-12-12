<?php

namespace amigoInvisible\Vistas;

class vistaFormModificarAmigoInvisible
{

  public static function render($amigoInvisible)
  {
    include "cabeceraPrincipal.php";

    echo "<div class='container'>";
?>
    <h3>Modificar Amigo Invisible</h3>
    <form class="w-75" action="index.php" method="post">
      <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $amigoInvisible->getNombre() ?>">
        </div>
      </div>

      <div class="mb-3">
        <label for="estado" class="form-label" name="estado">Estado</label>
        <select id="disabledSelect" class="form-select" name="estado" id="estado" value="<?= $amigoInvisible->getEstado() ?>">

          <option value=" activo">activo</option>
          <option value="comprado">comprado</option>
          <option value="entregado">entregado</option>

        </select>
      </div>

      <div class="mb-3 row">
        <label for="pista" class="col-sm-2 col-form-label">Precio Máximo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="maximoDinero" name="maximoDinero" min="1" max="9999" value="<?= $amigoInvisible->getMaximoDinero() ?>">
        </div>
      </div>
      <div class=" mb-3 row">
        <label for="pista" class="col-sm-2 col-form-label">Fecha Máxima</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fechaTope" name="fechaTope" value="<?= $amigoInvisible->getFechaTope() ?>">
        </div>
      </div>
      <div class=" mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Lugar</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lugar" name="lugar" value="<?= $amigoInvisible->getLugar() ?>">
        </div>
      </div>

      <div class=" mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Observaciones</label>
        <div class="col-sm-10">
          <input type="textarea" class="form-control" id="observaciones" name="observaciones" value="<?= $amigoInvisible->getObservaciones() ?>">
        </div>
      </div>
      <input type="hidden" name="id" value="<?= $amigoInvisible->getId() ?>">

      <div class=" mb-3 row w-25 float-end">
        <button class='btn btn-success' type="submit" name="accion" value="recibirFormModificarAmigoInvisible">Crear</button>
      </div>
    </form>



<?php
    echo "</div>";

    include "piePrincipal.php";
  }
}
