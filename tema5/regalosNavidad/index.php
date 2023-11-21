<?php
namespace RegalosNavidad;


use RegalosNavidad\controladores\controladorRegalos;
use RegalosNavidad\controladores\controladorUsuarios;



  session_start();
  
  

  //Autocargar las clases --------------------------
  spl_autoload_register(function ($class) {
      //echo substr($class, strpos($class,"\\")+1);
      $ruta = substr($class, strpos($class,"\\")+1);
      $ruta = str_replace("\\", "/", $ruta);
      include_once "./" . $ruta . ".php"; 
  });
  //Fin Autcargar ----------------------------------


if (isset($_REQUEST)){

    

    if(isset($_REQUEST['accion'])){
       //var_dump($_SESSION['id']);


          //MOSTRAR TODOS LOS RESULTADOS
          if (strcmp($_REQUEST['accion'],'mostrarTodos') == 0) {
            //Comprobar si estamos logueados
            if (isset($_SESSION['usuario'])) {
                controladorRegalos::mostrarRegalos();
            } else {
                //Pintar login
                controladorUsuarios::mostrarLogin();
            }
        }

        //CERRAR SESIÓN
        if (strcmp($_REQUEST['accion'],'cerrarSesion') == 0) {
            session_destroy();
            header("Location: index.php?accion=mostrarTodos");
        }






        
       /* if(strcmp($_REQUEST['accion'],'mostrarLogin')==0){
            controladorUsuarios::mostrarLogin();
        }

        
        if (strcmp($_REQUEST['accion'],'recibirFormLogin')==0){
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            
           controladorUsuarios::iniciarSesion($email,$password);
          
        }

        if(strcmp($_REQUEST['accion'],'error')==0){
            controladorUsuarios::mostrarError();
        }

        if(strcmp($_REQUEST['accion'],'cerrarSesion')==0){
            controladorUsuarios::mostrarLogin();
            session_destroy();
            header("Location: index.php?accion=mostrarLogin");

        }

        if(strcmp($_REQUEST['accion'],'error')==0){
            controladorUsuarios::mostrarError();
        }
        if(strcmp($_REQUEST['accion'],'mostrarRegalos')==0){
            controladorRegalos::mostrarRegalos($_SESSION['id']);
        }
        */

    }else {
        //Mostrar inicio
        controladorRegalos::mostrarInicio();
    
        }
    


}




?>