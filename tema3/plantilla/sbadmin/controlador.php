<?php

session_start();


//Si es una petición POST la tratamos aquí
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

        //PROCESAR LA INFORMACIÓN"
        $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

        //REDIRIGIR A INDEX.HTML
        header("Location: index.php");
        die();
    }




    
}
//------------------------------------------------GET------------------------------------------------------------

if (isset($_GET["accion"])) {



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

    if (strcmp($_GET['accion'],"borrarId")==0) {
        

        $idProducto=$_GET['id'];

        $posicionArray=array_search($idProducto,array_column($_SESSION['proyectos'],'id'));


        if ($posicionArray!== False){
            array_splice($_SESSION['proyectos'],$posicionArray,1);
        }
        header("Location: proyectos.php");
        die();

    }



    
}