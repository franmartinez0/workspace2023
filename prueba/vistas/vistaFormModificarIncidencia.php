<?php
namespace incidencias\vistas;

 
class vistaFormModificarIncidencia {

    public static function render($incidencia) {
        include "cabecera.php";
            
          echo "<div class='container'>";
?>

<h3>Modificar Incidencia</h3>
<form class="w-75" action="index.php" method="post">

  <div class="mb-3 row">
      <label for="modelo" class="col-sm-2 col-form-label">Solucion</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="solucion" name="solucion" value="<?= $incidencia->getSolucion() ?>">
      </div>
  </div>
  

  <div class="mb-3">
    <label for="estado" class="form-label" name="estado">Estado</label>
    <select id="disabledSelect" class="form-select" name="estado" id="estado"value="<?= $incidencia->getEstado() ?>">
      <option value="abierta">abierta</option>
      <option value="proceso">en proceso</option>
      <option value="resuelta">resuelta</option>

    </select>
  </div>
  

  <input type="hidden" name="id" value="<?= $incidencia->getId() ?>">
  <input type="hidden" name="id" value="<?= $incidencia->getDireccion() ?>">
  <input type="hidden" name="latitud" value="<?= $incidencia->getLatitud() ?>">
  <input type="hidden" name="longitud" value="<?= $incidencia->getLongitud() ?>">
  <input type="hidden" name="ciudad" value="<?= $incidencia->getCiudad() ?>">
  <input type="hidden" name="descripcion" value="<?= $incidencia->getDescripcion() ?>">
  <input type="hidden" name="idCliente" value="<?= $incidencia->getIdCliente() ?>">
  
  <div class="mb-3 row w-25 float-end">
      <button class='btn btn-success' type="submit" name="accion" value="recibirFormModificarIncidencia">Crear</button>
  </div>
</form>
          

<?php
          echo "</div>";

         


    }

}



?>