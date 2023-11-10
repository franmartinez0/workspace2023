<?php
namespace RegalosNavidad;


use RegalosNavidad\controladores\controladorRegalos;
use RegalosNavidad\controladores\controladorUsuarios;
use RegalosNavidad\controladores\controladorLinks;




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

        if(strcmp($_REQUEST['accion'],'mostrarLogin')==0){
            controladorUsuarios::mostrarFormularioLogin();
        }
    }




}




?>