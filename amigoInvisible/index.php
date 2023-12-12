<?php

namespace amigoInvisible;

session_start();
//session_destroy();

use amigoInvisible\Controladores\ControladorParticipantes;
use amigoInvisible\Controladores\ControladorAmigoInvisible;
use amigoInvisible\Modelos\AmigoInvisible;

//Autocargar las clases --------------------------
spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class, "\\") + 1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php";
});
//Fin Autcargar ----------------------------------

if (isset($_REQUEST)) {
    if (isset($_REQUEST["accion"])) {

        if (strcmp($_REQUEST['accion'], 'mostrarTodos') == 0) {
            //comprueba si estas dentro
            ControladorAmigoInvisible::mostrarTodos();
        }



        //MOSTRAR FORM NUEVO 
        if (strcmp($_REQUEST['accion'], 'mostrarFormNuevoAmigoInvisible') == 0) {
            ControladorAmigoInvisible::nuevoAmigoInvisible();
        }

        //RECIBIR FORM NUEVO
        if (strcmp($_REQUEST['accion'], 'recibirFormNuevoAmigoInvisible') == 0) {
            $nombre = $_REQUEST['nombre'];
            $estado = $_REQUEST['estado'];
            $maximoDinero = $_REQUEST['maximoDinero'];
            $fechaTope = $_REQUEST['fechaTope'];
            $lugar = $_REQUEST['lugar'];
            $observaciones = $_REQUEST['observaciones'];

            $amigoInvisible = new AmigoInvisible(nombre: $nombre, estado: $estado, maximoDinero: $maximoDinero, fechaTope: $fechaTope, lugar: $lugar, observaciones: $observaciones);

            ControladorAmigoInvisible::insertarNuevoAmigoInvisible($amigoInvisible);
        }
        //METODO REQUEST PARA MODIFICAR 
        if (strcmp($_REQUEST['accion'], 'modificarAmigoInvisible') == 0) {
            $id = $_REQUEST['id'];
            ControladorAmigoInvisible::modificarAmigoInvisible($id);
        }

        //ELIMINAR
        if (strcmp($_REQUEST['accion'], 'borrarAmigoInvisible') == 0) {
            $id = $_REQUEST['id'];

            ControladorAmigoInvisible::borrarAmigoInvisible($id);
        }




        //recogemos el formulario de actualizacion
        if (strcmp($_REQUEST['accion'], 'recibirFormModificarAmigoInvisible') == 0) {
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $estado = $_REQUEST['estado'];
            $maximoDinero = $_REQUEST['maximoDinero'];
            $fechaTope = $_REQUEST['fechaTope'];
            $lugar = $_REQUEST['lugar'];
            $observaciones = $_REQUEST['observaciones'];


            $amigoInvisible = new AmigoInvisible(id: $id, nombre: $nombre, estado: $estado, maximoDinero: $maximoDinero, fechaTope: $fechaTope, lugar: $lugar, observaciones: $observaciones);


            ControladorAmigoInvisible::insertarAmigoInvisibleModificado($amigoInvisible);
        }

        if (strcmp($_REQUEST['accion'], 'verAmigoInvisible') == 0) {
            $id = $_REQUEST['id'];
            ControladorAmigoInvisible::visualizarAmigoInvisible($id);
        }
        /*

        
        //METODO REQUEST PARA VISUALIZAR 
        





        //METODO REQUEST PARA VISUALIZAR LINKS
        if (strcmp($_REQUEST['accion'], 'visualizarLinks') == 0) {
            $id = $_REQUEST['id'];
            controladorLinks::visualizarLinks($id);
        }


        //MOSTRAR FORM NUEVO LINK
        if (strcmp($_REQUEST['accion'], 'mostrarFormNuevoLink') == 0) {
            $id = $_REQUEST['id'];
            controladorLinks::NuevoLink($id);
        }



        //RECIBIR FORM NUEVO LINK
        if (strcmp($_REQUEST['accion'], 'recibirFormNuevoLink') == 0) {
            $url = $_REQUEST['url'];
            $nombreUrl = $_REQUEST['nombreUrl'];
            $idRegalo = $_REQUEST['idRegalo'];

            $link = new link(url: $url, nombreUrl: $nombreUrl, idRegalo: $idRegalo);

            controladorLinks::insertarNuevolink($link, $idRegalo);
        }

        if (strcmp($_REQUEST['accion'], 'eliminarLink') == 0) {
            $id = $_REQUEST['id'];
            $idRegalo = $_REQUEST['idRegalo'];
            controladorLinks::eliminarLink($id, $idRegalo);
        }

        */
    } else {
        //Mostrar inicio
        ControladorAmigoInvisible::mostrarInicio();
    }
}
