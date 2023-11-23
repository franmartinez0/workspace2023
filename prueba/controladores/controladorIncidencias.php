<?php
namespace incidencias\controladores;
use incidencias\modelos\modeloIncidencias;
use incidencias\vistas\VistaInicio;
use incidencias\vistas\vistaFormModificarIncidencia;
use incidencias\vistas\vistaFormNuevaIncidencia;

class controladorIncidencias{

    public static function mostrarTodos(){

        $incidencias=modeloIncidencias::mostrarIncidencias();

        VistaInicio::render($incidencias);
    }

    public static function eliminarIncidencia($id){
        //eliminamos la incidencia de la bdd
        modeloIncidencias::eliminarIncidencia($id);


        //volvemos a mostrar todas las incidencias
        $incidencias=modeloIncidencias::mostrarIncidencias();

        VistaInicio::render($incidencias);
    }

    public static function verFormIncidencia($id){

        $incidencia=modeloIncidencias::infoIncidencia($id);

        vistaFormModificarIncidencia::render($incidencia);

    }

    public static function modificarIncidencia($incidencia){

        modeloIncidencias::modificarIncidencia($incidencia);

        $incidencias=modeloIncidencias::mostrarIncidencias();

      

    }
    public static function nuevaIncidencia(){
        vistaFormNuevaIncidencia::render();
    }
    public static function insertarNuevaIncidencia($incidencia){

        modeloIncidencias::insertarIncidencia($incidencia);
       
        $incidencias=modeloIncidencias::mostrarIncidencias();
        VistaInicio::render($incidencias);

    }

}


?>