<?php
 namespace DeepRacer\controladores;

 use DeepRacer\vistas\VistaLogin;


    
    //FORMULARIO DE LOGIN
    if (isset($_POST["formLogin"])) {
        //PROCESAR LA INFORMACIÓN
        $email = $_POST['email'];
       $_SESSION['usuario'] = array( "email" => $email);
        //REDIRIGIR A INDEX
      
    }





 class ControladorLogin{
    public static function mostrarLogin() {
        VistaLogin::render();
    }

 }





?>