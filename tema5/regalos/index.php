<?php
namespace regalos;

session_start();
//session_destroy();

use regalos\controladores\controladorUsuarios;
use regalos\controladores\controladorRegalos;
use regalos\modelos\regalo;

//Autocargar las clases --------------------------
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php"; 
});
//Fin Autcargar ----------------------------------

if(isset($_REQUEST)){
    if(isset($_REQUEST["accion"])){
        
        if(strcmp($_REQUEST['accion'],'mostrarTodos')==0){
            //comprueba si estas dentro
            if(isset($_SESSION['usuario'])){
                controladorRegalos::mostrarTodos();
               
            }else{
                controladorUsuarios::mostrarFormLogin("");
            
        }


    }

    //CERRAR SESIÓN
    if (strcmp($_REQUEST['accion'],'cerrarSesion') == 0) {
        session_destroy();
        header("Location: index.php?accion=mostrarTodos");
    }

    

     //RECOGER FORM LOGIN Y MOSTRAR
     if (strcmp($_REQUEST['accion'],'loginUsuarios') == 0) {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        controladorUsuarios::checkLogin($email, $password);
    }
    //MOSTRAR FORM NUEVO REGALO
    if (strcmp($_REQUEST['accion'],'mostrarFormNuevoRegalo') == 0) {
        controladorRegalos::NuevoRegalo();
    }

    //RECIBIR FORM NUEVO REGALO
    if (strcmp($_REQUEST['accion'],'recibirFormNuevoRegalo') == 0) {
        $nombre = $_REQUEST['nombre'];
        $idUsuario=$_REQUEST['idUsuario'];
        $precio=$_REQUEST['precio'];
        $estado=$_REQUEST['estado'];
        $year=$_REQUEST['year'];
        
    

        $regalo = new regalo(nombre:$nombre,idUsuario:$idUsuario,precio:$precio,estado:$estado,year:$year);

        controladorRegalos::insertarNuevoRegalo($regalo);
    }


    
    //ELIMINAR UN REGALO
    if (strcmp($_REQUEST['accion'],'eliminarRegalo') == 0) {
        $id = $_REQUEST['id'];
        controladorRegalos::eliminarRegalo($id);
    }

    

    //METODO REQUEST PARA VISUALIZAR REGALO
    if (strcmp($_REQUEST['accion'], 'visualizarRegalo') == 0) {
        $id = $_REQUEST['id'];
        ControladorRegalos::visualizarRegalo($id);
    }
    



     //METODO REQUEST PARA MODIFICAR REGALO
     if (strcmp($_REQUEST['accion'], 'modificarRegalo') == 0) {
        $id = $_REQUEST['id'];
        ControladorRegalos::verModificarRegalo($id);
    }


    //recogemos el formulario de actualizacion
    if (strcmp($_REQUEST['accion'], 'recibirFormModificarRegalo') == 0) {
        $nombre = $_REQUEST['nombre'];
        $idUsuario=$_REQUEST['idUsuario'];
        $precio=$_REQUEST['precio'];
        $estado=$_REQUEST['estado'];
        $year=$_REQUEST['year'];
        $id=$_REQUEST['id'];
        
        $regalo = new regalo(nombre:$nombre,idUsuario:$idUsuario,precio:$precio,estado:$estado,year:$year,id:$id);

        controladorRegalos::modificarRegalo($regalo);
        
    }







    
}else {
    //Mostrar inicio
    controladorUsuarios::mostrarInicio();
    


}
}
?>