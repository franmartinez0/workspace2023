<?php
 namespace RegalosNavidad\controladores;
 

 use RegalosNavidad\vistas\VistaInicio;
 use RegalosNavidad\modelos\ModeloRegalo;


class controladorRegalos{

    public static function mostrarInicio() {

        VistaInicio::render();
    }

}

?>