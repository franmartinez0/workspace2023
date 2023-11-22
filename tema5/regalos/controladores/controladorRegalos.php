<?php

namespace regalos\controladores;
use regalos\modelos\modeloRegalos;
use regalos\vistas\vistaFormNuevoRegalo;
use regalos\vistas\vistaRegalos;

class controladorRegalos{



    public static function mostrarTodos(){

        $usu = unserialize($_SESSION['usuario']);
        $regalos = modeloRegalos::mostrarRegalos($usu -> getId());

        vistaRegalos::render($regalos);
    }
    public static function eliminarRegalo($id){
        modeloRegalos::eliminarRegalo($id);

        $usu = unserialize($_SESSION['usuario']);
        $regalos = modeloRegalos::mostrarRegalos($usu -> getId());
        vistaRegalos::render($regalos);
    }
    public static function nuevoRegalo(){
        vistaFormNuevoRegalo::render();
    }
    public static function insertarNuevoRegalo($regalo){

        modeloRegalos::insertarRegalo($regalo);
        $usu = unserialize($_SESSION['usuario']);
        $regalos = modeloRegalos::mostrarRegalos($usu -> getId());

        vistaRegalos::render($regalos);

    }
}



?>