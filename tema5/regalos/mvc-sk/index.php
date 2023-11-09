<?php
namespace RegalosNavidad;



   use RegalosNavidad\controladores\ControladorRegalosNavidad;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------




    
    if (isset($_POST["formLogin"])) {
        //PROCESAR LA INFORMACIÓN
        $email = $_POST['email'];
       
        $_SESSION['usuario'] = array( "email" => $email);
        //REDIRIGIR A INDEX
        header("Location: proyectos.php");
        die();
    }else{

        if (isset($_REQUEST)) {
            //Tratamiento de botones, forms, ...
    
    
            
    
            
            if (isset($_REQUEST["accion"])) {
                if(strcmp($_REQUEST['accion'],'mostrarTodos')==0){
                    ControladorRegalosNavidad::mostrarTodos();
                }
    
    
    
            } else {
                //Mostrar login
                ControladorUsuario::mostrarTodos();
            }
            
        }
    

    }

    




?>