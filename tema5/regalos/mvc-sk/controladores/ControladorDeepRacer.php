<?php

    namespace DeepRacer\controladores;


    use DeepRacer\vistas\VistaInicio;
    use DeepRacer\modelos\ModeloResultados;
    use DeepRacer\vistas\VistaResultados;


    class ControladorDeepRacer {

        public static function mostrarInicio() {

            VistaInicio::render();
        }


        public static function mostrarTodos() {
            //primero hay que hacer conexion con la bdd para traer los datos
            $resultados=ModeloResultados::mostrarTodos();

            //llamamos a la vista para que pinte los datos almacenados 
            VistaResultados::render($resultados);
            
        }



    }






?>