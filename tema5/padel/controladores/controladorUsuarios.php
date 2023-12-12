<?php
namespace regalos\controladores;

use regalos\vistas\vistaLogin;
use regalos\vistas\vistaInicio;
use regalos\vistas\vistaRegalos;
use regalos\modelos\modeloUsuarios;
use regalos\modelos\modeloRegalos;




//mostrarlogin
class controladorUsuarios{

    public static function mostrarInicio(){
        vistaInicio::render();
    }


    public static function mostrarFormLogin(){
        vistaLogin::render();
    }
    
    public static function checkLogin($email, $password) {
        $resultado = modeloUsuarios::checkLogin($email, $password); 

        //Según login muestro otra vez el login o muestro los resultados
        if ($resultado == false) {
            controladorUsuarios::mostrarFormLogin("Datos incorrectos");
        } else {
            //Meter en la sesión el usuario
            $_SESSION['usuario'] = serialize($resultado);
           
            $usu = unserialize($_SESSION['usuario']);
            $productos = modeloRegalos::mostrarRegalos($usu -> getId());

            // RENDERIZAMOS LA VISTA DE RESULTADOS
            vistaRegalos::render($productos);
            die();      

        }
    }


}
?>