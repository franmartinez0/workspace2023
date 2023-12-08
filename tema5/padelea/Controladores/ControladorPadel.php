<?php

    namespace Padel\controladores;

    use Padel\Modelos\ModeloJugadores;
    use Padel\Vistas\VistaInicio;
    use Padel\Vistas\VistaLogin;

    class ControladorPadel {

        public static function mostrarInicio() {

            VistaInicio::render();
        }


        
        public static function mostrarLogin() {

            VistaLogin::render();
        }




        public static function checkLogin($email, $password) {
            $resultado = ModeloJugadores::checkLogin($email, $password); 
    
            //Según login muestro otra vez el login o muestro los resultados
            if ($resultado == false) {
                controladorPadel::mostrarLogin("Datos incorrectos");
            } else {
                //Meter en la sesión el usuario
                $_SESSION['usuario'] = serialize($resultado);
               
                $usu = unserialize($_SESSION['usuario']);
                //$productos = modeloRegalos::mostrarRegalos($usu -> getId());
    
                // RENDERIZAMOS LA VISTA DE RESULTADOS
                //vistaRegalos::render($productos);
                die();      
    
            }
        }


    }



?>