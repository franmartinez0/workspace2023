<?php
namespace regalos\controladores;

use regalos\modelos\modeloLinks;
use regalos\vistas\vistaLinks;
use regalos\vistas\vistaFormNuevoLink;

class controladorLinks{
        //funcion para buscar links
    public static function visualizarLinks($id){

        $links = modeloLinks::visualizarLinks($id);

        vistaLinks::render($links, $id);
    }

    public static function NuevoLink($id){

        vistaFormNuevoLink::render($id);

    }

    
    public static function insertarNuevoLink($link,$idRegalo){

        modeloLinks::insertarLink($link);
        
        $links = modeloLinks::visualizarLinks($idRegalo);

        vistaLinks::render($links, $idRegalo);
    }



    public static function eliminarLink($id,$idRegalo){

        modeloLinks::eliminarLink($id);

     $links = modeloLinks::visualizarLinks($idRegalo);

        vistaLinks::render($links, $idRegalo);
    }

    

}






?>