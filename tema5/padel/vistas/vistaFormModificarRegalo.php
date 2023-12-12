<?php
    namespace regalos\vistas;

    class vistaFormModificarRegalo {

        public static function render($regalo) {
          include "cabeceraPrincipal.php";
            
          echo "<div class='container'>";
?>

<h3>Modificar Resultado</h3>
<form class="w-75" action="index.php" method="post">

  <div class="mb-3 row">
      <label for="modelo" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $regalo->getNombre() ?>">
      </div>
  </div>

  <div class="mb-3">
    <label for="estado" class="form-label" name="estado">Estado</label>
    <select id="disabledSelect" class="form-select" name="estado" id="estado"value="<?= $regalo->getEstado() ?>">
      <option value="entregado">entregado</option>
      <option value="comprado">comprado</option>
      <option value="disponible">disponible</option>

    </select>
  </div>

  <div class="mb-3 row">
      <label for="pista" class="col-sm-2 col-form-label">Precio</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="precio" name="precio" min="1" max="9999" value="<?= $regalo->getPrecio() ?>">
      </div>
  </div>
  <div class="mb-3 row">
      <label for="tiempo" class="col-sm-2 col-form-label">año</label>
      <div class="col-sm-10">
      <input type="number" class="form-control" id="year" name="year" min="1900" max="2200"value="<?= $regalo->getYear() ?>">
      </div>
  </div>
  <input type="hidden" name="id" value="<?= $regalo->getId() ?>">
  <?php
              
  $usuario = unserialize($_SESSION['usuario']);
  echo '<input type="hidden" name="idUsuario" value=" ' . $usuario -> getId() . ' ">';
  
 
              
  ?>
 
  <div class="mb-3 row w-25 float-end">
      <button class='btn btn-success' type="submit" name="accion" value="recibirFormModificarRegalo">Crear</button>
  </div>
</form>
          

<?php
          echo "</div>";

          include "piePrincipal.php";


        }


    }