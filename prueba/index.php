<?php
namespace incidencias;
use incidencias\controladores\controladorIncidencias;
use incidencias\modelos\incidencia;

session_start();
//session_destroy();


//Autocargar las clases --------------------------
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php"; 
});
//Fin Autcargar ----------------------------------


if(isset($_REQUEST)){
    if(!isset($_REQUEST["accion"])){
        
    controladorIncidencias::mostrarTodos();
       
          
    




}else{
    //ELIMINAR UN REGALO
    if (strcmp($_REQUEST['accion'],'eliminarIncidencia') == 0) {
        $id = $_REQUEST['id'];
        controladorIncidencias::eliminarIncidencia($id);
    }

    //METODO REQUEST PARA MODIFICAR INCIDENCIA
    if (strcmp($_REQUEST['accion'], 'modificarIncidencia') == 0) {
        $id = $_REQUEST['id'];
        controladorIncidencias::verFormIncidencia($id);
    }

    
    //recogemos el formulario actualizar la bbdd
    if (strcmp($_REQUEST['accion'], 'recibirFormModificarIncidencia') == 0) {

        $id=$_REQUEST['id'];
        $latitud=$_REQUEST['latitud'];
        $longitud=$_REQUEST['longitud'];
        $ciudad=$_REQUEST['ciudad'];
        $direccion=$_REQUEST['direccion'];
        $descripcion=$_REQUEST['descripcion'];
        $solucion=$_REQUEST['solucion'];
        $idCliente=$_REQUEST['idCliente'];
        $estado=$_REQUEST['estado'];
        
       
        
        $incidencia = new incidencia(id:$id,latitud:$latitud,longitud:$longitud,ciudad:$ciudad,direccion:$direccion,descripcion:$descripcion,solucion:$solucion,idCliente:$idCliente,estado:$estado);

        controladorIncidencias::modificarIncidencia($incidencia);
        
    }



    //MOSTRAR FORM NUEVO REGALO
    if (strcmp($_REQUEST['accion'],'mostrarFormNuevoRegalo') == 0) {
        controladorIncidencias::NuevaIncidencia();
    }

    //RECIBIR FORM NUEVO REGALO
    if (strcmp($_REQUEST['accion'],'recibirFormNuevaIncidencia') == 0) {
        
        $latitud=$_REQUEST['latitud'];
        $longitud=$_REQUEST['longitud'];
        $ciudad=$_REQUEST['ciudad'];
        $direccion=$_REQUEST['direccion'];
        $descripcion=$_REQUEST['descripcion'];
        $solucion=$_REQUEST['solucion'];
        $idCliente=$_REQUEST['idCliente'];
        $estado=$_REQUEST['estado'];
        
        
    

        $incidencia = new incidencia(latitud:$latitud,longitud:$longitud,ciudad:$ciudad,direccion:$direccion,descripcion:$descripcion,solucion:$solucion,idCliente:$idCliente,estado:$estado);

        controladorIncidencias::insertarNuevaIncidencia($incidencia);
       
    }
    



}
}



?>