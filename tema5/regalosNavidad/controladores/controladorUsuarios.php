<?php
 namespace RegalosNavidad\vistas;


 use RegalosNavidad\vistas\VistaLogin;
 use RegalosNavidad\vistas\VistaInicio;
 use RegalosNavidad\vistas\VistaResultados;
 use RegalosNavidad\modelos\modeloUsuario;

 class controladorUsuarios{




    //funcion para mostrar inicio
    public static function mostrarInicio(){

        VistaInicio::render();
    }


    //funcion para mostrar el login

    public static function mostrarLogin(){

        VistaLogin::render();
    }


    public static function iniciarSesion($email,$password){

        modeloUsuario::iniciarSesion($email,$password);

        
        die();
        


    }





    
 }




?>