<?php
    namespace Padel;
   

session_start();
    use Padel\Controladores\ControladorPadel;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------


    if (isset($_REQUEST)) {
        //Tratamiento de botones, forms, ...
        if (isset($_REQUEST["accion"])) {
          
            
            if(strcmp($_REQUEST['accion'],'mostrarTodos')==0){
                //comprueba si estas dentro
                if(isset($_SESSION['usuario'])){
                    ControladorPadel::mostrarInicio();
                   
                }else{
                    ControladorPadel::mostrarLogin();
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
                controladorPadel::checkLogin($email, $password);
            }

    
        }
        


        } else {
            //Mostrar inicio
            ControladorPadel::mostrarInicio();
        }
    
    
    }
    



?>