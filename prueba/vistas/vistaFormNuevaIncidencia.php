<?php
    namespace incidencias\vistas;

    class vistaFormNuevaIncidencia {

        public static function render() {

            include "cabecera.php";
            
            echo "<div class='container'>";
          
?>
      
  <h3>Nueva Incidencia</h3>
  <form class="w-75" action="index.php" method="post">
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">latitud</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="latitud" name="latitud">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">longitud</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="longitud" name="longitud">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">ciudad</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">direccion</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">descripcion</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">solucion</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="solucion" name="solucion">
        </div>
    </div>
    //se que no esta bien asi, pero no podia hacerlo de otra forma jeje
    <div class="mb-3 row">
        <label for="modelo" class="col-sm-2 col-form-label">Id Cliente</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="idCliente" name="idCliente">
        </div>
    </div>
    <div class="mb-3">
      <label for="estado" class="form-label" name="estado">Estado</label>
      <select id="disabledSelect" class="form-select" name="estado" id="estado">
        <option value="abierto">abierto</option>
        <option value="proceso">proceso</option>
        <option value="resuelto">resuelto</option>

      </select>
    </div>

    
    
   
    <div class="mb-3 row w-25 float-end">
        <button class='btn btn-success' type="submit" name="accion" value="recibirFormNuevaIncidencia">Crear</button>
    </div>
  </form>
            
 
<?php
            echo "</div>";

         
        }


    }