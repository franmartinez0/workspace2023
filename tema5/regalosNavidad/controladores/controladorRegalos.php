<?php
 namespace RegalosNavidad\controladores;


use RegalosNavidad\vistas\VistaInicio;
 use RegalosNavidad\modelos\modeloRegalos;
use RegalosNavidad\vistas\VistaRegalos;

class controladorRegalos{

    public static function mostrarInicio() {

        VistaInicio::render();
    }


    public static function mostrarRegalos(){
        //$regalos=modeloRegalos::mostrarRegalos();

        //VistaRegalos::render($regalos);
    }



}

?>