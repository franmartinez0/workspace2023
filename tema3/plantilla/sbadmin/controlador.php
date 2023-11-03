<?php

session_start();

include_once("lib.php");


//---------------------------------------------------POST----------------------------------------------------
if ($_POST) {




    //FORMULARIO DE LOGIN
    if (isset($_POST["formLogin"])) {
        //PROCESAR LA INFORMACIÓN
        $email = $_POST['email'];
       
        $_SESSION['usuario'] = array( "email" => $email);
        //REDIRIGIR A INDEX
        header("Location: proyectos.php");
        die();
    }




    //FORMULARIO DE REGISTRO
    if (isset($_POST["formRegistro"])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        //Controlar que las contraseñas sean iguales            
        if (strcmp($password, $password2) != 0) {
            //echo "Qué pasa";
            header("Location: registro.php?error=distintaspassword");
            die();
        }

        if(!checkEmail(!email)){
            header("location: registro.php?error=Email en uso");
            die();
        }

        //PROCESAR LA INFORMACIÓN"
        $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

        //REDIRIGIR A INDEX.HTML
        header("Location: proyectos.php");
        die();
    }

    if(isset($_POST["nuevoProyecto"])){
        $nombre =$_POST["nombre"];
        $fechaIni =$_POST["fechaini"];
        $fechaFin =$_POST["fechafin"];
        $porcentaje =$_POST["porcentaje"];
        $importancia =$_POST["importancia"];

        //contamos el numero de id que hay en el array y le añadimos 1 para tener un incremento en todo momento
        if (isset($_SESSION['proyectos'])) {
            $id = 33;
            $ids = array_column($_SESSION['proyectos'], 'id');
            $id = max($ids) + 1;
        }
           
        
        array_push($_SESSION['proyectos'],["id" => $id, "nombre" => $nombre, "fechaini" => $fechaIni, "fechafin" => $fechaFin, "porcentaje" => $porcentaje,"importancia" => $importancia]);

        header("Location: proyectos.php");
        die();
    }







    
}
//------------------------------------------------GET------------------------------------------------------------

if (isset($_GET["accion"])) {


    //borrar todo
    if (strcmp($_GET['accion'],"borrarTodo")==0) {
        foreach ($_SESSION['proyectos'] as $i => $value) {
                    unset($_SESSION['proyectos'][$i]);
                }
    
        header("Location: proyectos.php");
        die();
    }

    if (strcmp($_GET['accion'],"cerrar")==0) {
        session_destroy();
        
        header("Location: login.php");
        die();
    }




    //borrar por id
    if (strcmp($_GET['accion'],"borrarId")==0) {
        

        $idProducto=$_GET['id'];

        $posicionArray=array_search($idProducto,array_column($_SESSION['proyectos'],'id'));


        if ($posicionArray!== False){
            array_splice($_SESSION['proyectos'],$posicionArray,1);
        }
        header("Location: proyectos.php");
        die();

    }


    if(strcmp($_GET['accion'],"informacion")==0){



        foreach ($_SESSION['proyectos'] as $key => $value) {
            if ($_GET['id'] == $key) {
                $_SESSION['id'] = $_SESSION['proyectos'][$key];
                
                header("Location: verProyecto.php");
                die();
            }
        }
        
    }
    


    
}