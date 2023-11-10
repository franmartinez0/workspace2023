<?php
 namespace RegalosNavidad\controladores;

use DeepRacer\modelos\ConexionBaseDeDatos;
use RegalosNavidad\vistas\VistaLogin;
 use RegalosNavidad\vistas\VistaInicio;
 use RegalosNavidad\modelos\modeloUsuario;
 use RegalosNavidad\modelos\modeloRegalos;
use RegalosNavidad\vistas\VistaResultados;

 class controladorUsuarios{




    //funcion para mostrar inicio
    public static function mostrarInicio(){

        VistaInicio::render();
    }


    //funcion para mostrar el login

    public static function mostrarLogin(){

        VistaLogin::render();
    }
    
    public static function mostrarError(){

        VistaLogin::render();
        echo"<p class='text-danger' mt-3>login incorrecto, por favor vuelva a intentarlo</p>";
        die();
    }

    public static function iniciarSesion($email,$password){

        modeloUsuario::iniciarSesion($email,$password);

       
     

      //metemos aqui la funcion que llama a controlador regalos para pintar todo
        
        
        die();
    }





    
 }




?>