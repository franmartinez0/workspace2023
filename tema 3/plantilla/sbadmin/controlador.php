<?php

session_start();
//hay que modifiicar aun los formularios para que el registro y login funcione
//recibimos por post la informacion sobre el login

//Si es una petición POST la tratamos aquí
if ($_POST) {
    //FORMULARIO DE REGISTRO
    if (isset($_POST["formRegistro"])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $sexo = $_POST["sexo"];
        $provincia = $_POST["provincia"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        //Controlar que las contraseñas sean iguales            
        if (strcmp($password, $password2) != 0) {
            //echo "Qué pasa";
            header("Location: registro.php?error=NoCoinciden");
            die();
        }

        //PROCESAR LA INFORMACIÓN"
        $_SESSION['usuario'] = array("nombre" => $nombre, "email" => $email);

        //REDIRIGIR A INDEX.HTML
        header("Location: index.php");
        die();
    }




    //FORMULARIO DE LOGIN
    if (isset($_POST["formLogin"])) {
        //PROCESAR LA INFORMACIÓN
        $email = $_POST['email'];
        $_SESSION['usuario'] = array("nombre" => "", "email" => $email);

        //REDIRIGIR A INDEX.HTML
        header("Location: index.php");
        die();
    }
}
