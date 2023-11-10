<?php
namespace RegalosNavidad;


use RegalosNavidad\controladores\controladorRegalos;
use RegalosNavidad\controladores\controladorUsuarios;
use RegalosNavidad\controladores\controladorLink;

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


if (isset($_REQUEST)){


    if(isset($_REQUEST['accion'])){

        if(strcmp($_REQUEST['accion'],'mostrarLogin')==0){
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
    }else {
        //Mostrar inicio
        controladorRegalos::mostrarInicio();
    
        }
    


}




?>